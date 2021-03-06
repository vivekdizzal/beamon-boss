<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tooling extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index($id=0)
	{
		/*
			Insert here in quote table
		*/
		
		//End of inserting in quote table

		$data['fixture_list'] = $this->crud_model->get('boss_master_fixture_list');
		$data['material_list'] = $this->crud_model->get('boss_master_tooling_material');
		$data['standard_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Standard'));
		$data['complex_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Complex'));
		$data['accessories_list'] = $this->crud_model->get('boss_master_accssories');
		$data['mark_up'] = $this->crud_model->get('boss_master_markup');
		$data['tooling_extra_material_inch'] = $this->crud_model->get('boss_master_extra_material');
		$data['quote_id'] = $id;

		$breadcrumb['data'] = "Create Tooling";
		$this->load->view('layouts/header',$breadcrumb);
		$this->load->view('tooling/add_tooling',$data);
		$this->load->view('layouts/footer');
	}

	
	public function add_tooling()
	{
		$get_total_cost = material_calculation($_POST);

		//insert into tooling table
		//check multiple quote exist
		$tooling_data = array(
							'tooling_type' => $this->input->post('tooling_type'),
							'quote_id'	=> $this->input->post('quote_id'),
							'tooling_description' => $this->input->post('tooling_description'),
							'tooling_type' => $this->input->post('tooling_type'),
							'fixture_type' => $this->input->post('fixtue_type'),
							//'multiple_quote' => $multiple_quote,
							'premium_percentage' => $this->input->post('tooling_premium'),
							'discount_percentage' => $this->input->post('tooling_discount'),
							'premium_cost'	=> $get_total_cost['tooling_premium'],
							'discount_cost'	=> $get_total_cost['tooling_discount'],
							'tooling_cost_adp' => $get_total_cost['total_calculation_after_pd'],
							'date_created'	=> Date('Y-m-d'),
							'status'	=> "1"
						);

		if(isset($_POST['multiple_quote']))
		{
			$tooling_data['multiple_quote'] =  $this->input->post('multiple_quote');
			$tooling_data['multiple_quote_cost'] =  $get_total_cost['round_off_mq'];
			$tooling_data['tooling_cost_wop'] = $get_total_cost['total_calculation_wop'];
		}
		else
		{
			$tooling_data['multiple_quote'] = "1";
			$tooling_data['tooling_cost_wop'] = $get_total_cost['total_calculation_wop'];
			$tooling_data['multiple_quote_cost'] =  $get_total_cost['round_off_mq'];

							
		}
		$tooling_id = $this->crud_model->insert('boss_tooling',$tooling_data);

		//insert in tooling material
		$count = count($_POST['material_xvalue']);
		
		
		for($i = 0 ; $i < $count ; $i++)
		{
			$tooling_material_data = array(
										'quote_id' => $this->input->post('quote_id'),
										'tooling_id' => $tooling_id,
										'material_id' => $this->input->post('tooling_material_select')[$i],
										'size_x'	=>  $this->input->post('material_xvalue')[$i],
										'size_y'	=>  $this->input->post('material_yvalue')[$i],
										'markup'	=> $this->input->post('markup'),
										'extra_material' => $this->input->post('extra_material'),
										'cost'	=> $get_total_cost['material_cost'][$i],
										'date_created'	=> Date('Y-m-d'),
										'status'		=> "1"
									 );
			$this->crud_model->insert('boss_tooling_material',$tooling_material_data);
		}


		//insert into time
		$tooling_time_data = array(
								'quote_id'=> $this->input->post('quote_id'),
								'tooling_id' => $tooling_id,
								'std_des_hr' => $this->input->post('std_design_hr'),
								'std_des_min' =>$this->input->post('std_design_min'),
								'cpx_des_hr' =>$this->input->post('cpx_design_hr'),
								'cpx_des_min' =>$this->input->post('cpx_design_min'),
								'std_mac_hr' =>$this->input->post('std_machine_hr'),
								'std_mac_min' =>$this->input->post('std_machine_min'),
								'cpx_mac_hr' =>$this->input->post('cpx_machine_hr'),
								'cpx_mac_min' =>$this->input->post('cpx_machine_min'),
								'std_ass_hr' =>$this->input->post('std_assembly_hr'),
								'std_ass_min' =>$this->input->post('std_assembly_min'),
								'cpx_ass_hr' =>$this->input->post('cpx_assembly_hr'),
								'cpx_ass_min' =>$this->input->post('cpx_assembly_min'),
								'total_design_cost' => $get_total_cost['total_design_cost'], 
								'total_machine_cost' => $get_total_cost['total_machine_cost'],
								'total_assembly_cost' => $get_total_cost['total_assembly_cost'],
								'date_created' => Date('Y-m-d'),
								'status' 	=> "1"
							);
		$this->crud_model->insert('boss_tooling_time',$tooling_time_data);

		/**/
		$tooling_time_extra = array(
								'quote_id'=> $this->input->post('quote_id'),
								'tooling_id' => $tooling_id,
								'other_time_cost' => $this->input->post('time_other_name'),
								'other_std_hr' => $this->input->post('std_other_hr'),
								'other_std_min' => $this->input->post('std_other_min'),
								'other_cpx_hr' => $this->input->post('cpx_other_hr'),
								'other_cpx_min' => $this->input->post('cpx_other_min'),
								'other_total_cost' => $get_total_cost['total_other_time_cost'],
								'status' => 1,
								'date_created' => Date('Y-m-d')
							  );
		$this->crud_model->insert('boss_timing_time_other',$tooling_time_extra);
		//End of extra time

		//insert extra material
		if(isset($_POST['tooling_material_other']))
		{
			$extra_material_count = count($_POST['tooling_material_other']);

			for($em=0 ; $em<$extra_material_count; $em++)
			{
				$extra_material_data = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'material_name' => $this->input->post('tooling_material_other')[$em],
											'material_cost' => $this->input->post('tooling_material_other_value')[$em],
											'status' => "1",
											'date_created' => Date('Y-m-d')
										);
				$this->crud_model->insert('boss_tooling_extra',$extra_material_data);
			}
		}
		/*
			Insert into tooling accessories

			unit/hour want to check

			need to think
		*/
		$tooling_accessory_count = count($_POST['tooling_accessory_name']);
		for($ta=0 ; $ta < $tooling_accessory_count ; $ta++)
		{
			
				$tooling_accessories = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'accessory_id' => $this->input->post('tooling_accessory_name')[$ta],
											'acc_cost' => $this->input->post('extra_cost')[$ta],
											'acc_qty' => $this->input->post('extra_qty')[$ta],
											'acc_total_cost' => $get_total_cost['accessory_cost'][$ta],
											'status' => "1",
											'date_created' => Date('Y-m-d')
										);
				//insert query here
				$this->crud_model->insert('boss_tooling_accessory',$tooling_accessories);
		}

		/*Insert into accessory extra*/
		if(isset($_POST['tooling_accessory_extra_name']))
		{
			$tooling_extra_accessory_count = count($this->input->post('tooling_accessory_extra_name'));
			for($tea = 0 ; $tea < $tooling_extra_accessory_count; $tea++)
			{
				$tooling_accessory_extra = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'extra_acc_name' => $this->input->post('tooling_accessory_extra_name')[$tea],
											'extra_acc_price' => $this->input->post('extra_accessory_cost')[$tea],
											'extra_acc_qty' => $this->input->post('extra_accessory_qty')[$tea],
											'extra_acc_total' => $get_total_cost['accessory_extra_cost'][$tea]

											);
					$this->crud_model->insert('boss_tooling_accessory_extra',$tooling_accessory_extra);

			}
		}
		/*Update quote table here**/
		if($this->input->post('tooling_status') == "tooling_update")
		{
			$update_quote_status = "1";
		}
		if($this->input->post('tooling_status') == "tooling_send_evaluation")
		{
			$update_quote_status = "2";
		}
		if($this->input->post('tooling_status') == "tooling_send_final")
		{
			$update_quote_status = "3";
		}

		$this->crud_model->update('boss_quotes',array('quote_status'=>$update_quote_status,'tooling_cost'=>$get_total_cost['total_calculation_after_pd']),array('id'=>$this->input->post('quote_id')));
		redirect('quotes/quote_status');
	}

	/*function add tooling custom*/
	public function add_tooling_custom()
	{		
		$tooling_custom_calculation = tooling_custom_calculation($_POST);
		$tooling_data = array(
						'tooling_type' => $this->input->post('tooling_type'),
						'quote_id'	=> $this->input->post('quote_id'),
						'tooling_description' => $this->input->post('tooling_description'),
						'premium_percentage' => $this->input->post('tooling_premium'),
						'discount_percentage' => $this->input->post('tooling_discount'),
						'tooling_cost_adp' => $tooling_custom_calculation['total_apd'],
						'date_created'	=> Date('Y-m-d'),
						'status'	=> "1"
					);

		if(isset($_POST['multiple_quote']))
		{
			$tooling_data['multiple_quote'] =  $this->input->post('cstm_multiple_quote');
			$tooling_data['multiple_quote_cost'] =  $tooling_custom_calculation['multiple_quotes'];
			$tooling_data['tooling_cost_wop'] = $tooling_custom_calculation['total_wopd'];
		}
		else
		{
			$tooling_data['multiple_quote'] = "1";
			$tooling_data['tooling_cost_wop'] = $tooling_custom_calculation['total_wopd'];
			$tooling_data['multiple_quote_cost'] =  $tooling_custom_calculation['multiple_quotes'];

							
		}
		$tooling_id = $this->crud_model->insert('boss_tooling',$tooling_data);

		//insert in tooling material
		$count = count($_POST['cstm_material_xvalue']);
		
		
		for($i = 0 ; $i < $count ; $i++)
		{
			$tooling_material_data = array(
										'quote_id' => $this->input->post('quote_id'),
										'tooling_id' => $tooling_id,
										'material_id' => $this->input->post('cstm_tooling_material_select')[$i],
										'size_x'	=>  $this->input->post('cstm_material_xvalue')[$i],
										'size_y'	=>  $this->input->post('cstm_material_yvalue')[$i],
										'markup'	=> $this->input->post('markup'),
										'extra_material' => $this->input->post('extra_material'),
										'cost'	=> $this->input->post('cstm_material_total_cost')[$i],
										'date_created'	=> Date('Y-m-d'),
										'status'		=> "1"
									 );
			$this->crud_model->insert('boss_tooling_material',$tooling_material_data);
		}


		//insert into time
		$tooling_time_data = array(
								'quote_id'=> $this->input->post('quote_id'),
								'tooling_id' => $tooling_id,
								'std_des_hr' => $this->input->post('cstm_std_design_hr'),
								'std_des_min' =>$this->input->post('cstm_std_design_min'),
								'cpx_des_hr' =>$this->input->post('cstm_cpx_design_hr'),
								'cpx_des_min' =>$this->input->post('cstm_cpx_design_min'),
								'std_mac_hr' =>$this->input->post('cstm_std_machine_hr'),
								'std_mac_min' =>$this->input->post('cstm_std_machine_min'),
								'cpx_mac_hr' =>$this->input->post('cstm_cpx_machine_hr'),
								'cpx_mac_min' =>$this->input->post('cstm_cpx_machine_min'),
								'std_ass_hr' =>$this->input->post('cstm_std_assembly_hr'),
								'std_ass_min' =>$this->input->post('cstm_std_assembly_min'),
								'cpx_ass_hr' =>$this->input->post('cstm_cpx_assembly_hr'),
								'cpx_ass_min' =>$this->input->post('cstm_cpx_assembly_min'),
								'total_design_cost' => $this->input->post('total_cost_design'), 
								'total_machine_cost' =>  $this->input->post('total_cost_machine'),
								'total_assembly_cost' => $this->input->post('total_cost_assembly'),
								'date_created' => Date('Y-m-d'),
								'status' 	=> "1"
							);
		$this->crud_model->insert('boss_tooling_time',$tooling_time_data);

		/**/
		$tooling_time_extra = array(
								'quote_id'=> $this->input->post('quote_id'),
								'tooling_id' => $tooling_id,
								'other_time_cost' => $this->input->post('cstm_time_other_name'),
								'other_std_hr' => $this->input->post('cstm_std_other_hr'),
								'other_std_min' => $this->input->post('cstm_std_other_min'),
								'other_cpx_hr' => $this->input->post('cstm_cpx_other_hr'),
								'other_cpx_min' => $this->input->post('cstm_cpx_other_min'),
								'other_total_cost' => $this->input->post('total_cost_other'),
								'status' => 1,
								'date_created' => Date('Y-m-d')
							  );
		$this->crud_model->insert('boss_timing_time_other',$tooling_time_extra);
		//End of extra time
		//insert extra material
		if(isset($_POST['cstm_tooling_material_other']))
		{
			$extra_material_count = count($_POST['cstm_tooling_material_other']);

			for($em=0 ; $em<$extra_material_count; $em++)
			{
				$extra_material_data = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'material_name' => $this->input->post('cstm_tooling_material_other')[$em],
											'material_cost' => $this->input->post('cstm_tooling_material_other_value')[$em],
											'status' => "1",
											'date_created' => Date('Y-m-d')
										);
				$this->crud_model->insert('boss_tooling_extra',$extra_material_data);
			}
		}
		/*
			Insert into tooling accessories

			unit/hour want to check

			need to think
		*/
		$tooling_accessory_count = count($_POST['cstm_tooling_accessory_name']);
		for($ta=0 ; $ta < $tooling_accessory_count ; $ta++)
		{
			
				$tooling_accessories = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'accessory_id' => $this->input->post('cstm_tooling_accessory_name')[$ta],
											'acc_cost' => $this->input->post('cstm_extra_cost')[$ta],
											'acc_qty' => $this->input->post('cstm_extra_qty')[$ta],
											'acc_total_cost' => $this->input->post('cstm_extra_accessory_cost')[$ta],
											'status' => "1",
											'date_created' => Date('Y-m-d')
										);
				//insert query here
				$this->crud_model->insert('boss_tooling_accessory',$tooling_accessories);
			
		
		}

		/*Insert into accessory extra*/
		if(isset($_POST['cstm_tooling_accessory_extra_name']))
		{
			$tooling_extra_accessory_count = count($this->input->post('cstm_tooling_accessory_extra_name'));
			for($tea = 0 ; $tea < $tooling_extra_accessory_count; $tea++)
			{
				$tooling_accessory_extra = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'extra_acc_name' => $this->input->post('cstm_tooling_accessory_extra_name')[$tea],
											'extra_acc_price' => $this->input->post('cstm_tooling_extra_accessory_cost')[$tea],
											'extra_acc_qty' => $this->input->post('cstm_tooling_extra_accessory_qty')[$tea],
											'extra_acc_total' => $this->input->post('cstm_tooling_extra_accessory_total_cost')[$tea]

											);
					$this->crud_model->insert('boss_tooling_accessory_extra',$tooling_accessory_extra);

			}
		}
		redirect('quotes/quote_status');

	}
	/* function is used to view tooling**/

	public function view_tooling($tooling_id=0)
	{
		$where = array('tooling_id' => $tooling_id);
		/*get the all the record based on the tooling id*/
		$data['boss_tooling'] = $this->crud_model->get('boss_tooling',$where);
		$data['boss_tooling_accessory'] = $this->crud_model->get('boss_tooling_accessory',$where);
		$data['boss_tooling_accessory_extra'] = $this->crud_model->get('boss_tooling_accessory_extra',$where);
		$data['boss_tooling_extra'] = $this->crud_model->get('boss_tooling_extra',$where);
		$data['boss_tooling_material'] = $this->crud_model->get('boss_tooling_material',$where);
		$data['boss_tooling_time'] = $this->crud_model->get('boss_tooling_time',$where);
		$data['boss_timing_time_other'] = $this->crud_model->get('boss_timing_time_other',$where);
		$data['boss_tooling_material'] = $this->crud_model->get('boss_tooling_material',$where);
		/*Count the size of the dynamic selectors*/
		$data['material_count'] = $this->crud_model->get_count('boss_tooling_material',$where);
		$data['extra_material_count'] = $this->crud_model->get_count('boss_tooling_extra',$where);
		$data['tooling_accessory_extra'] = $this->crud_model->get_count('boss_tooling_accessory_extra',$where);

		/*Display db values*/
		$data['fixture_list'] = $this->crud_model->get('boss_master_fixture_list');
		$data['material_list'] = $this->crud_model->get('boss_master_tooling_material');
		$data['standard_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Standard'));
		$data['complex_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Complex'));
		$data['accessories_list'] = $this->crud_model->get('boss_master_accssories');
		$data['mark_up'] = $this->crud_model->get('boss_master_markup');
		$data['tooling_extra_material_inch'] = $this->crud_model->get('boss_master_extra_material');
		$data['quote_id'] = $data['boss_tooling'][0]['quote_id'];

		/*Quote details*/
		$data['quote_type'] = $this->crud_model->get_one('quote_type','boss_quotes',array('id'=>$data['quote_id']));
		/**/

		$breadcrumb['data'] = "Edit Tooling";
		$this->load->view('layouts/header',$breadcrumb);
		$this->load->view('tooling/edit_tooling',$data);
		$this->load->view('layouts/footer');

	}

	public function view_tooling_action($id=0)
	{
		$get_total_cost = material_calculation($_POST);
		$where = array('tooling_id' => $id);
		$total_tooling_value_existing = $this->crud_model->get_row('boss_tooling',$where);

		/*check the values are same or different*/
		if($total_tooling_value_existing['tooling_cost_wop'] != $get_total_cost['total_calculation_wop'] || $total_tooling_value_existing['tooling_cost_adp'] != $get_total_cost['total_calculation_after_pd'] || $total_tooling_value_existing['multiple_quote_cost'] != $get_total_cost['round_off_mq'] )
		{
				/*create a new quotes based on the parent quote reference*/
				$quote_detail = $this->crud_model->get_row('boss_quotes',array('id' => $this->input->post('quote_id') ));
				/*Insert into quote table*/
				if($quote_detail['quote_ref_sub'] == "")
				{
					$key = 0;
				}
				else
				{
					$key = $quote_detail['quote_ref_sub'] + 1;
				}
				$quote_ref = $this->config->item('quote_ref_alp')[$key]; 
				 

				$quote_data = array(
						'quote_ref' => $quote_detail['quote_ref'],
						'engineer_id' =>$quote_detail['engineer_id'],
						'email_id' =>$quote_detail['email_id'],
						'email_id_cc' =>$quote_detail['email_id_cc'] ,
						'company_id' =>$quote_detail['company_id'],
						'customer_id' =>$quote_detail['customer_id'],
						'date_created' =>date('Y-m-d'),
						'tooling_exist' =>$quote_detail['tooling_exist'],
						'quote_status' 	=>$quote_detail['quote_status'],
						'quote_type'	=> $quote_detail['quote_type'],
						'quote_ref_sub' => $key,
						'status'	=> "1"
					  );

				$quote_id = $this->crud_model->insert('boss_quotes',$quote_data);


				/*End of quote insertion*/

				$tooling_data = array(
							'tooling_type' => $this->input->post('tooling_type'),
							'quote_id'	=> $quote_id,
							'tooling_description' => $this->input->post('tooling_description'),
							'tooling_type' => $this->input->post('tooling_type'),
							'fixture_type' => $this->input->post('fixture_type'),
							//'multiple_quote' => $multiple_quote,
							'premium_percentage' => $this->input->post('tooling_premium'),
							'discount_percentage' => $this->input->post('tooling_discount'),
							'premium_cost'	=> $get_total_cost['tooling_premium'],
							'discount_cost'	=> $get_total_cost['tooling_discount'],
							'tooling_cost_adp' => $get_total_cost['total_calculation_after_pd'],
							'date_created'	=> Date('Y-m-d'),
							'status'	=> "1"
						);

					if(isset($_POST['multiple_quote']))
					{
						$tooling_data['multiple_quote'] =  $this->input->post('multiple_quote');
						$tooling_data['multiple_quote_cost'] =  $get_total_cost['round_off_mq'];
						$tooling_data['tooling_cost_wop'] = $get_total_cost['total_calculation_wop'];
					}
					else
					{
						$tooling_data['multiple_quote'] = "1";
						$tooling_data['tooling_cost_wop'] = $get_total_cost['total_calculation_wop'];
						$tooling_data['multiple_quote_cost'] =  $get_total_cost['round_off_mq'];

										
					}
					$tooling_id = $this->crud_model->insert('boss_tooling',$tooling_data);

					//insert in tooling material
					$count = count($_POST['material_xvalue']);
					
					
					for($i = 0 ; $i < $count ; $i++)
					{
						$tooling_material_data = array(
													'quote_id' => $quote_id,
													'tooling_id' => $tooling_id,
													'material_id' => $this->input->post('tooling_material_select')[$i],
													'size_x'	=>  $this->input->post('material_xvalue')[$i],
													'size_y'	=>  $this->input->post('material_yvalue')[$i],
													'markup'	=> $this->input->post('markup'),
													'extra_material' => $this->input->post('extra_material'),
													'cost'	=> $get_total_cost['material_cost'][$i],
													'date_created'	=> Date('Y-m-d'),
													'status'		=> "1"
												 );
						$this->crud_model->insert('boss_tooling_material',$tooling_material_data);
					}


					//insert into time
					$tooling_time_data = array(
											'quote_id'=> $quote_id,
											'tooling_id' => $tooling_id,
											'std_des_hr' => $this->input->post('std_design_hr'),
											'std_des_min' =>$this->input->post('std_design_min'),
											'cpx_des_hr' =>$this->input->post('cpx_design_hr'),
											'cpx_des_min' =>$this->input->post('cpx_design_min'),
											'std_mac_hr' =>$this->input->post('std_machine_hr'),
											'std_mac_min' =>$this->input->post('std_machine_min'),
											'cpx_mac_hr' =>$this->input->post('cpx_machine_hr'),
											'cpx_mac_min' =>$this->input->post('cpx_machine_min'),
											'std_ass_hr' =>$this->input->post('std_assembly_hr'),
											'std_ass_min' =>$this->input->post('std_assembly_min'),
											'cpx_ass_hr' =>$this->input->post('cpx_assembly_hr'),
											'cpx_ass_min' =>$this->input->post('cpx_assembly_min'),
											'total_design_cost' => $get_total_cost['total_design_cost'], 
											'total_machine_cost' => $get_total_cost['total_machine_cost'],
											'total_assembly_cost' => $get_total_cost['total_assembly_cost'],
											'date_created' => Date('Y-m-d'),
											'status' 	=> "1"
										);
					$this->crud_model->insert('boss_tooling_time',$tooling_time_data);

					/**/
					$tooling_time_extra = array(
											'quote_id'=> $quote_id,
											'tooling_id' => $tooling_id,
											'other_time_cost' => $this->input->post('time_other_name'),
											'other_std_hr' => $this->input->post('std_other_hr'),
											'other_std_min' => $this->input->post('std_other_min'),
											'other_cpx_hr' => $this->input->post('cpx_other_hr'),
											'other_cpx_min' => $this->input->post('cpx_other_min'),
											'other_total_cost' => $get_total_cost['total_other_time_cost'],
											'status' => 1,
											'date_created' => Date('Y-m-d')
										  );
					$this->crud_model->insert('boss_timing_time_other',$tooling_time_extra);
					//End of extra time

					//insert extra material
					if(isset($_POST['tooling_material_other']))
					{
						$extra_material_count = count($_POST['tooling_material_other']);

						for($em=0 ; $em<$extra_material_count; $em++)
						{
							$extra_material_data = array(
														'quote_id' => $quote_id,
														'tooling_id' => $tooling_id,
														'material_name' => $this->input->post('tooling_material_other')[$em],
														'material_cost' => $this->input->post('tooling_material_other_value')[$em],
														'status' => "1",
														'date_created' => Date('Y-m-d')
													);
							$this->crud_model->insert('boss_tooling_extra',$extra_material_data);
						}
					}
					/*
						Insert into tooling accessories

						unit/hour want to check

						need to think
					*/
					$tooling_accessory_count = count($_POST['tooling_accessory_name']);
					for($ta=0 ; $ta < $tooling_accessory_count ; $ta++)
					{
						
							$tooling_accessories = array(
														'quote_id' => $quote_id,
														'tooling_id' => $tooling_id,
														'accessory_id' => $this->input->post('tooling_accessory_name')[$ta],
														'acc_cost' => $this->input->post('extra_cost')[$ta],
														'acc_qty' => $this->input->post('extra_qty')[$ta],
														'acc_total_cost' => $get_total_cost['accessory_cost'][$ta],
														'status' => "1",
														'date_created' => Date('Y-m-d')
													);
							//insert query here
							$this->crud_model->insert('boss_tooling_accessory',$tooling_accessories);
					}

					/*Insert into accessory extra*/
					if(isset($_POST['tooling_accessory_extra_name']))
					{
						$tooling_extra_accessory_count = count($this->input->post('tooling_accessory_extra_name'));
						for($tea = 0 ; $tea < $tooling_extra_accessory_count; $tea++)
						{
							$tooling_accessory_extra = array(
														'quote_id' => $quote_id,
														'tooling_id' => $tooling_id,
														'extra_acc_name' => $this->input->post('tooling_accessory_extra_name')[$tea],
														'extra_acc_price' => $this->input->post('extra_accessory_cost')[$tea],
														'extra_acc_qty' => $this->input->post('extra_accessory_qty')[$tea],
														'extra_acc_total' => $get_total_cost['accessory_extra_cost'][$tea]

														);
								$this->crud_model->insert('boss_tooling_accessory_extra',$tooling_accessory_extra);

						}
					}
					/*Update quote table here**/
						/*Update quote table here**/
					if($this->input->post('tooling_status') == "tooling_update")
					{
						$update_quote_status = "1";
					}
					if($this->input->post('tooling_status') == "tooling_send_evaluation")
					{
						$update_quote_status = "2";
					}
					if($this->input->post('tooling_status') == "tooling_send_final")
					{
						$update_quote_status = "3";
					}

					$this->crud_model->update('boss_quotes',array('quote_status'=>$update_quote_status,'tooling_cost'=>$get_total_cost['total_calculation_after_pd']),array('id'=>$quote_id));
					/*Redirect from here*/
					redirect('quotes/quote_status');
		}
		else
		{
			echo "equal";
				if($this->input->post('tooling_status') == "tooling_update")
				{
					$update_quote_status = "1";
				}
				if($this->input->post('tooling_status') == "tooling_send_evaluation")
				{
					$update_quote_status = "2";
				}
				if($this->input->post('tooling_status') == "tooling_send_final")
				{
					$update_quote_status = "3";
				}

					$this->crud_model->update('boss_quotes',array('quote_status'=>$update_quote_status),array('id'=>$quote_id));
				redirect('quotes/quote_status');	
		}

	



	}

	/* Public view action for custom qupte**/
	public function cstm_view_tooling_action($id=0)
	{
/*		echo "<pre>";
		print_r($_POST);
		exit;*/
		$get_total_cost = tooling_custom_calculation($_POST);
			
		$where = array('tooling_id' => $id);
		$total_tooling_value_existing = $this->crud_model->get_row('boss_tooling',$where);

		if($get_total_cost['multiple_quotes'] != $total_tooling_value_existing['multiple_quote_cost'] || $get_total_cost['total_apd'] !=$total_tooling_value_existing['tooling_cost_adp'] || $get_total_cost['total_wopd']!= $total_tooling_value_existing['tooling_cost_wop'] )
		{

			/*Insert into quotes here*/
			$quote_detail = $this->crud_model->get_row('boss_quotes',array('id' => $this->input->post('quote_id') ));
				/*Insert into quote table*/
				if($quote_detail['quote_ref_sub'] == "")
				{
					$key = 0;
				}
				else
				{
					$key = $quote_detail['quote_ref_sub'] + 1;
				}
				$quote_ref = $this->config->item('quote_ref_alp')[$key]; 
				 

				$quote_data = array(
						'quote_ref' => $quote_detail['quote_ref'],
						'engineer_id' =>$quote_detail['engineer_id'],
						'email_id' =>$quote_detail['email_id'],
						'email_id_cc' =>$quote_detail['email_id_cc'] ,
						'company_id' =>$quote_detail['company_id'],
						'customer_id' =>$quote_detail['customer_id'],
						'date_created' =>date('Y-m-d'),
						'tooling_exist' =>$quote_detail['tooling_exist'],
						'quote_status' 	=>$quote_detail['quote_status'],
						'quote_type'	=> $quote_detail['quote_type'],
						'quote_ref_sub' => $key,
						'status'	=> "1"
					  );

				$quote_id = $this->crud_model->insert('boss_quotes',$quote_data);


				/*End of quote insertion*/
			/***/

			$tooling_data = array(
						'tooling_type' => $this->input->post('tooling_type'),
						'quote_id'	=> $quote_id,
						'tooling_description' => $this->input->post('tooling_description'),
						'premium_percentage' => $this->input->post('tooling_premium'),
						'discount_percentage' => $this->input->post('tooling_discount'),
						'tooling_cost_adp' => $get_total_cost['total_apd'],
						'date_created'	=> Date('Y-m-d'),
						'status'	=> "1"
					);

		if(isset($_POST['multiple_quote']))
		{
			$tooling_data['multiple_quote'] =  $this->input->post('cstm_multiple_quote');
			$tooling_data['multiple_quote_cost'] =  $get_total_cost['multiple_quotes'];
			$tooling_data['tooling_cost_wop'] = $get_total_cost['total_wopd'];
		}
		else
		{
			$tooling_data['multiple_quote'] = "1";
			$tooling_data['tooling_cost_wop'] = $get_total_cost['total_wopd'];
			$tooling_data['multiple_quote_cost'] =  $get_total_cost['multiple_quotes'];

							
		}
		$tooling_id = $this->crud_model->insert('boss_tooling',$tooling_data);

		//insert in tooling material
		$count = count($_POST['cstm_material_xvalue']);
		
		
		for($i = 0 ; $i < $count ; $i++)
		{
			$tooling_material_data = array(
										'quote_id' => $quote_id,
										'tooling_id' => $tooling_id,
										'material_id' => $this->input->post('cstm_tooling_material_select')[$i],
										'size_x'	=>  $this->input->post('cstm_material_xvalue')[$i],
										'size_y'	=>  $this->input->post('cstm_material_yvalue')[$i],
										'markup'	=> $this->input->post('markup'),
										'extra_material' => $this->input->post('extra_material'),
										'cost'	=> $this->input->post('cstm_material_total_cost')[$i],
										'date_created'	=> Date('Y-m-d'),
										'status'		=> "1"
									 );
			$this->crud_model->insert('boss_tooling_material',$tooling_material_data);
		}


		//insert into time
		$tooling_time_data = array(
								'quote_id'=>$quote_id,
								'tooling_id' => $tooling_id,
								'std_des_hr' => $this->input->post('cstm_std_design_hr'),
								'std_des_min' =>$this->input->post('cstm_std_design_min'),
								'cpx_des_hr' =>$this->input->post('cstm_cpx_design_hr'),
								'cpx_des_min' =>$this->input->post('cstm_cpx_design_min'),
								'std_mac_hr' =>$this->input->post('cstm_std_machine_hr'),
								'std_mac_min' =>$this->input->post('cstm_std_machine_min'),
								'cpx_mac_hr' =>$this->input->post('cstm_cpx_machine_hr'),
								'cpx_mac_min' =>$this->input->post('cstm_cpx_machine_min'),
								'std_ass_hr' =>$this->input->post('cstm_std_assembly_hr'),
								'std_ass_min' =>$this->input->post('cstm_std_assembly_min'),
								'cpx_ass_hr' =>$this->input->post('cstm_cpx_assembly_hr'),
								'cpx_ass_min' =>$this->input->post('cstm_cpx_assembly_min'),
								'total_design_cost' => $this->input->post('total_cost_design'), 
								'total_machine_cost' =>  $this->input->post('total_cost_machine'),
								'total_assembly_cost' => $this->input->post('total_cost_assembly'),
								'date_created' => Date('Y-m-d'),
								'status' 	=> "1"
							);
		$this->crud_model->insert('boss_tooling_time',$tooling_time_data);

		/**/
		$tooling_time_extra = array(
								'quote_id'=> $quote_id,
								'tooling_id' => $tooling_id,
								'other_time_cost' => $this->input->post('cstm_time_other_name'),
								'other_std_hr' => $this->input->post('cstm_std_other_hr'),
								'other_std_min' => $this->input->post('cstm_std_other_min'),
								'other_cpx_hr' => $this->input->post('cstm_cpx_other_hr'),
								'other_cpx_min' => $this->input->post('cstm_cpx_other_min'),
								'other_total_cost' => $this->input->post('total_cost_other'),
								'status' => 1,
								'date_created' => Date('Y-m-d')
							  );
		$this->crud_model->insert('boss_timing_time_other',$tooling_time_extra);
		//End of extra time
		//insert extra material
		if(isset($_POST['cstm_tooling_material_other']))
		{
			$extra_material_count = count($_POST['cstm_tooling_material_other']);

			for($em=0 ; $em<$extra_material_count; $em++)
			{
				$extra_material_data = array(
											'quote_id' => $quote_id,
											'tooling_id' => $tooling_id,
											'material_name' => $this->input->post('cstm_tooling_material_other')[$em],
											'material_cost' => $this->input->post('cstm_tooling_material_other_value')[$em],
											'status' => "1",
											'date_created' => Date('Y-m-d')
										);
				$this->crud_model->insert('boss_tooling_extra',$extra_material_data);
			}
		}
		/*
			Insert into tooling accessories

			unit/hour want to check

			need to think
		*/
		$tooling_accessory_count = count($_POST['cstm_tooling_accessory_name']);
		for($ta=0 ; $ta < $tooling_accessory_count ; $ta++)
		{
			
				$tooling_accessories = array(
											'quote_id' => $quote_id,
											'tooling_id' => $tooling_id,
											'accessory_id' => $this->input->post('cstm_tooling_accessory_name')[$ta],
											'acc_cost' => $this->input->post('cstm_extra_cost')[$ta],
											'acc_qty' => $this->input->post('cstm_extra_qty')[$ta],
											'acc_total_cost' => $this->input->post('cstm_extra_accessory_cost')[$ta],
											'status' => "1",
											'date_created' => Date('Y-m-d')
										);
				//insert query here
				$this->crud_model->insert('boss_tooling_accessory',$tooling_accessories);
			
		
		}

		/*Insert into accessory extra*/
		if(isset($_POST['cstm_tooling_accessory_extra_name']))
		{
			$tooling_extra_accessory_count = count($this->input->post('cstm_tooling_accessory_extra_name'));
			for($tea = 0 ; $tea < $tooling_extra_accessory_count; $tea++)
			{
				$tooling_accessory_extra = array(
											'quote_id' => $this->input->post('quote_id'),
											'tooling_id' => $tooling_id,
											'extra_acc_name' => $this->input->post('cstm_tooling_accessory_extra_name')[$tea],
											'extra_acc_price' => $this->input->post('cstm_tooling_extra_accessory_cost')[$tea],
											'extra_acc_qty' => $this->input->post('cstm_tooling_extra_accessory_qty')[$tea],
											'extra_acc_total' => $this->input->post('cstm_tooling_extra_accessory_total_cost')[$tea]

											);
					$this->crud_model->insert('boss_tooling_accessory_extra',$tooling_accessory_extra);

			}
		}

			/*Update quote table here**/
			if($this->input->post('cstm_tooling_status') == "tooling_update")
			{
				$update_quote_status = "1";
			}
			if($this->input->post('cstm_tooling_status') == "tooling_send_evaluation")
			{
				$update_quote_status = "2";
			}
			if($this->input->post('cstm_tooling_status') == "tooling_send_final")
			{
				$update_quote_status = "3";
			}

			$this->crud_model->update('boss_quotes',array('quote_status'=>$update_quote_status,'tooling_cost'=>$get_total_cost['total_wopd']),array('id'=>$quote_id));
			redirect('quotes/quote_status');
		}
		else
		{
		/*Update quote table here**/
			if($this->input->post('cstm_tooling_status') == "tooling_update")
			{
				$update_quote_status = "1";
			}
			if($this->input->post('cstm_tooling_status') == "tooling_send_evaluation")
			{
				$update_quote_status = "2";
			}
			if($this->input->post('cstm_tooling_status') == "tooling_send_final")
			{
				$update_quote_status = "3";
			}

			$this->crud_model->update('boss_quotes',array('quote_status'=>$update_quote_status),array('id'=>$quote_id));
			redirect('quotes/quote_status');
		}


	}



}
