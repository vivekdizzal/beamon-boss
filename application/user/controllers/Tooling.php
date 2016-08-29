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

		$this->load->view('layouts/header');
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
			$tooling_data['multiple_quote_cost'] =  $get_total_cost['total_calculation_wop'];

							
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


		redirect('quotes/quote_status');
	}

	/*function add tooling custom*/
	public function add_tooling_custom()
	{
		$tooling_data = array(
						'tooling_type' => $this->input->post('tooling_type'),
						'quote_id'	=> $this->input->post('quote_id'),
						'tooling_description' => $this->input->post('tooling_description'),
						'date_created'	=> Date('Y-m-d'),
						'status'	=> "1"
					);

		if(isset($_POST['multiple_quote']))
		{
			$tooling_data['multiple_quote'] =  $this->input->post('multiple_quote');
			/*$tooling_data['multiple_quote_cost'] =  $get_total_cost['round_off_mq'];
			$tooling_data['tooling_cost_wop'] = $get_total_cost['total_calculation_wop'];*/
		}
		else
		{
			$tooling_data['multiple_quote'] = "1";
			/*$tooling_data['tooling_cost_wop'] = $get_total_cost['total_calculation_wop'];
			$tooling_data['multiple_quote_cost'] =  $get_total_cost['total_calculation_wop'];*/

							
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
										'cost'	=> $this->input->post('material_total_cost')[$i],
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
								'other_time_cost' => $this->input->post('time_other_name'),
								'other_std_hr' => $this->input->post('std_other_hr'),
								'other_std_min' => $this->input->post('std_other_min'),
								'other_cpx_hr' => $this->input->post('cpx_other_hr'),
								'other_cpx_min' => $this->input->post('cpx_other_min'),
								'other_total_cost' => $this->input->post('total_cost_other'),
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
											'acc_total_cost' => $this->input->post('extra_accessory_cost')[$ta],
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
											'extra_acc_total' => $this->input->post('cstm_extra_accessory_cost')[$tea]

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

		/*Display db values*/
		$data['fixture_list'] = $this->crud_model->get('boss_master_fixture_list');
		$data['material_list'] = $this->crud_model->get('boss_master_tooling_material');
		$data['standard_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Standard'));
		$data['complex_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Complex'));
		$data['accessories_list'] = $this->crud_model->get('boss_master_accssories');
		$data['mark_up'] = $this->crud_model->get('boss_master_markup');
		$data['tooling_extra_material_inch'] = $this->crud_model->get('boss_master_extra_material');
		$data['quote_id'] = $data['boss_tooling'][0]['quote_id'];
		/**/

		$this->load->view('layouts/header');
		$this->load->view('tooling/edit_tooling',$data);
		$this->load->view('layouts/footer');

	}

	public function view_tooling_action()
	{
		echo "<pre>";
		print_r($_POST);
		exit;

		/*check the total values changed or not 
				->if yes
					->create sub record and continue the entire flow

				-if not do action according to it

		*/






	}


}
