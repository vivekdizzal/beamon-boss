<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tooling extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('boss_helper');
    }
	public function index()
	{
		$this->load->view('layout/header_login.php');
		$this->load->view('welcome_message');
		$this->load->view('layout/footer_login.php');
	}

	public function list_material()
	{

		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_MATERIAL,$where);
		$breadcrumb['path_url'] = "List material";
		$this->load->view('layout/header.php',$breadcrumb);
		$this->load->view('material/list_material',$data);
		$this->load->view('layout/footer.php');	
	}

	public function add_material()
	{

		if($this->input->post())
		{
			$data = array(
						'material_name' => $this->input->post('material_name'),
						'material_description' => $this->input->post('material_description'),
						'cost' => $this->input->post('material_cost'),
						'date_created' => date('Y-m-d'),
						'status'	=> '1'
					);
			$this->crud_model->insert(MASTER_TOOLING_MATERIAL,$data);
			$this->session->set_flashdata('response',success_message('Material Added succesfully'));
			redirect('tooling/list_material');
		}
		$breadcrumb['path_url'] = "Add material";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('material/add_material');
		$this->load->view('layout/footer');
	}

	public function edit_material($id=0)
	{
		if($this->input->post())
		{
			$where = array('id' => $id);
			$data = array(
							'material_name' => $this->input->post('material_name'),
							'material_description' => $this->input->post('material_description'),
							'cost'	=> $this->input->post('material_cost')
						);

			$this->crud_model->update(MASTER_TOOLING_MATERIAL,$data,$where);
			$this->session->set_flashdata('response',success_message('Material Updated succesfully'));
			redirect('tooling/list_material');
		}

		//get the necessary record for the id and pass to edit view
		$data['get_record'] = $this->crud_model->get(MASTER_TOOLING_MATERIAL,array('id' => $id));
		$breadcrumb['path_url'] = "Edit material";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('material/edit_material',$data);
		$this->load->view('layout/footer');
	}

	public function add_accessories()
	{
		if($this->input->post())
		{
			$data = array(
						'accessory_name' => $this->input->post('accessory_name'),
						'accessory_cost' => $this->input->post('cost'),
						'accessory_qty'	 => $this->input->post('accessory_qty'),
						'status'		 => '1',
						'date_created'	 => date('Y-m-d')
					);
			$this->crud_model->insert(MASTER_TOOLING_ACCESSORY,$data);
			$this->session->set_flashdata('response',success_message('Accessory Added succesfully'));
			redirect('tooling/list_accessory');
		}
		$breadcrumb['path_url'] = "Add Accessory";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('accessory/add_accesssory');
		$this->load->view('layout/footer');
	}

	public function edit_accessories($id=0)
	{
		if($this->input->post())
		{
			$where = array('id' => $id);
			$data = array(
							'accessory_name' => $this->input->post('accessory_name') ,
							'accessory_qty' => $this->input->post('accessory_qty'),
							'accessory_cost'	=> $this->input->post('cost')	
						);
			$this->crud_model->update(MASTER_TOOLING_ACCESSORY,$data,$where);
			$this->session->set_flashdata('response',success_message('Accessory updated succesfully'));
			redirect('tooling/list_accessory');

		}
		$data['get_record'] = $this->crud_model->get(MASTER_TOOLING_ACCESSORY,array('id' => $id));
		$breadcrumb['path_url'] = "Edit Accessory";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('accessory/edit_accessory',$data);
		$this->load->view('layout/footer');
	}

	public function add_time()
	{
		if($this->input->post())
		{
			$data = array(
						'name' => $this->input->post('name'),
						'cost' => $this->input->post('add_time'),
						'status' => '1',
						'date_created' => date('Y-m-d')
					);
			$this->crud_model->insert(MASTER_TOOLING_TIMING,$data);
			redirect('tooling/list_time');
		}
		$breadcrumb['path_url'] = "Add Time";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('time/add_time.php');
		$this->load->view('layout/footer');
	}

	public function add_fixture()
	{
		if($this->input->post())
		{
			$data = array(
						'fixture_name' => $this->input->post('fixture_name'),
						'fixture_description' => $this->input->post('fixture_description'),
						'date_created' => date('Y-m-d'),
						'status'		=> '1'
					);
			$this->crud_model->insert(MASTER_TOOLING_FIXTURE,$data);
			$this->session->set_flashdata('response',success_message('Fixture Added succesfully'));
			redirect('tooling/list_fixture');

		}
		$breadcrumb['path_url'] = "Add Fixture";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('fixture/add_fixture');
		$this->load->view('layout/footer');

	}


	public function list_fixture()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_FIXTURE,$where);
		$breadcrumb['path_url'] = "List Fixture";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('fixture/list_fixture',$data);
		$this->load->view('layout/footer');
	}


	public function edit_fixture($id=0)
	{

		if($this->input->post())
		{
			$where = array('id' => $id);
			$data = array(
							'fixture_name' => $this->input->post('fixture_name'),
							'fixture_description' => $this->input->post('fixture_description'),
						);
			$this->crud_model->update(MASTER_TOOLING_FIXTURE,$data,$where);
			$this->session->set_flashdata('response',success_message('Fixture Updated succesfully'));
			redirect('tooling/list_fixture');

		}

		$data['get_record'] = $this->crud_model->get(MASTER_TOOLING_FIXTURE,array('id' => $id));
		$breadcrumb['path_url'] = "Edit Fixture";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('fixture/edit_fixture',$data);
		$this->load->view('layout/footer');
	}

	public function list_time()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_TIMING,$where);
		$breadcrumb['path_url'] = "List Time";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('time/list_time',$data);
		$this->load->view('layout/footer');
	}

	public function edit_time($id=0)
	{
		if($this->input->post())
		{
			$where = array('id' => $id);
			$data = array(
						'cost' => $this->input->post('cost')
					);
			$this->crud_model->update(MASTER_TOOLING_TIMING,$data,$where);
			$this->session->set_flashdata('response',success_message('Time Updated succesfully'));
			redirect('tooling/list_time');
		}

		$data['records'] = $this->crud_model->get(MASTER_TOOLING_TIMING,array('id' => $id));
		$breadcrumb['path_url'] = "Edit Time";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('time/edit_time',$data);
		$this->load->view('layout/footer');
	}

	public function list_accessory()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_ACCESSORY,$where);
		$breadcrumb['path_url'] = "List Accessory";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('accessory/list_accessory',$data);
		$this->load->view('layout/footer');
	}

	public function download_csv()
	{

	}

	public function upload_csv()
	{

	}

	public function extra_material()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get('boss_master_extra_material',$where);
		$breadcrumb['path_url'] = "List Extra Material";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('extra_material/list_extra_material',$data);
		$this->load->view('layout/footer');
	}

	public function add_extra_material()
	{
		if($this->input->post())
		{
			$data = array(
						'extra_material_inch' => $this->input->post('extra_material_inch'),
						'status' => '1',
						'date_created' => date('Y-m-d')
					);
			$this->crud_model->insert('boss_master_extra_material',$data);
			$this->session->set_flashdata('response',success_message('Material Added succesfully'));
			redirect('tooling/extra_material');
		}
		$breadcrumb['path_url'] = "Add Extra Material";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('extra_material/add_extra_material.php');
		$this->load->view('layout/footer');
	}

	public function edit_extra_material($id=0)
	{
		if($this->input->post())
		{
			$where = array('id' => $id);
			$data = array(
						'extra_material_inch' => $this->input->post('extra_material_inch')
					);
			$this->crud_model->update('boss_master_extra_material',$data,$where);
			$this->session->set_flashdata('response',success_message('Material Updated succesfully'));
			redirect('tooling/extra_material');
		}

		$data['records'] = $this->crud_model->get('boss_master_extra_material',array('id' => $id));
		$breadcrumb['path_url'] = "Edit Extra Material";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('extra_material/edit_extra_material',$data);
		$this->load->view('layout/footer');
	}
	/* for markup */
	public function list_markup()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get('boss_master_markup',$where);
		$breadcrumb['path_url'] = "List Marukup Percentage";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('markup/list_markup',$data);
		$this->load->view('layout/footer');
	}

	public function add_markup()
	{
		if($this->input->post())
		{
			$data = array(
						'markup_percentage' => $this->input->post('markup_percentage'),
						'status' => '1',
						'date_created' => date('Y-m-d')
					);
			$this->crud_model->insert('boss_master_markup',$data);
			$this->session->set_flashdata('response',success_message('Markup Added succesfully'));
			redirect('tooling/list_material');
		}
		$breadcrumb['path_url'] = "Add Marukup Percentage";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('markup/add_markup');
		$this->load->view('layout/footer');
	}

	public function edit_markup($id=0)
	{
		if($this->input->post())
		{
			$where = array('id' => $id);
			$data = array(
						'markup_percentage' => $this->input->post('markup_percentage')
					);
			$this->crud_model->update('boss_master_markup',$data,$where);
			$this->session->set_flashdata('response',success_message('Markup Updated succesfully'));
			redirect('tooling/list_markup');
		}

		$data['records'] = $this->crud_model->get('boss_master_markup',array('id' => $id));
		$breadcrumb['path_url'] = "Edit Marukup Percentage";
		$this->load->view('layout/header',$breadcrumb);
		$this->load->view('markup/edit_markup',$data);
		$this->load->view('layout/footer');
	}


	/* For deletting process  */
	public function delete_material($id=0)
	{
		$this->crud_model->delete(MASTER_TOOLING_MATERIAL,array('id' => $id));
		$this->session->set_flashdata('response',error_message('Material Deleted succesfully'));
		redirect('tooling/list_material');
	}

	public function delete_fixture($id=0)
	{
		$this->crud_model->delete(MASTER_TOOLING_FIXTURE,array('id' => $id));
		redirect('tooling/list_fixture');
	}
	public function delete_time($id=0)
	{
		$this->crud_model->delete(MASTER_TOOLING_TIMING,array('id' => $id));
		redirect('tooling/list_time');
	}
	public function delete_accessory($id=0)
	{
		$this->crud_model->delete(MASTER_TOOLING_ACCESSORY,array('id' => $id));
		redirect('tooling/list_accessory');
	}

	public function delete_markup($id=0)
	{
		$this->crud_model->delete('boss_master_markup',array('id' => $id));
		redirect('tooling/list_markup');
	}
	public function delete_extra_material($id=0)
	{
		$this->crud_model->delete('boss_master_extra_material',array('id' => $id));
		redirect('tooling/extra_material');
	}
}
