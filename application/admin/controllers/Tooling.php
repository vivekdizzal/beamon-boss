<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tooling extends CI_Controller {
	public function __construct() {
        parent::__construct();
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
		$this->load->view('layout/header.php');
		$this->load->view('material/list_material',$data);
		$this->load->view('layout/footer.php');	
	}

	public function add_material()
	{

		if($this->input->post())
		{
			$data = array(
						'material_name' => $this->input->post('material_description'),
						'material_description' => $this->input->post('material_description'),
						'cost' => $this->input->post('material_cost'),
						'date_created' => date('Y-m-d'),
						'status'	=> '1'
					);
			$this->crud_model->insert(MASTER_TOOLING_MATERIAL,$data);
			redirect('tooling/list_material');
		}
		$this->load->view('layout/header');
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
			redirect('tooling/list_material');
		}

		//get the necessary record for the id and pass to edit view
		$data['get_record'] = $this->crud_model->get(MASTER_TOOLING_MATERIAL,array('id' => $id));

		$this->load->view('layout/header');
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
			redirect('tooling/list_material');
		}
		$this->load->view('layout/header');
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
			redirect('tooling/list_accessory');

		}
		$data['get_record'] = $this->crud_model->get(MASTER_TOOLING_ACCESSORY,array('id' => $id));
		$this->load->view('layout/header');
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
		$this->load->view('layout/header');
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
			redirect('tooling/list_fixture');

		}
		$this->load->view('layout/header');
		$this->load->view('fixture/add_fixture');
		$this->load->view('layout/footer');

	}


	public function list_fixture()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_FIXTURE,$where);
		$this->load->view('layout/header');
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
			redirect('tooling/list_fixture');

		}

		$data['get_record'] = $this->crud_model->get(MASTER_TOOLING_FIXTURE,array('id' => $id));

		$this->load->view('layout/header');
		$this->load->view('fixture/edit_fixture',$data);
		$this->load->view('layout/footer');
	}

	public function list_time()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_TIMING,$where);
		$this->load->view('layout/header');
		$this->load->view('time/list_time',$data);
		$this->load->view('layout/footer');
	}

	public function list_accessory()
	{
		$where = array('status' => '1');
		$data['result'] = $this->crud_model->get(MASTER_TOOLING_ACCESSORY,$where);
		$this->load->view('layout/header');
		$this->load->view('accessory/list_accessory',$data);
		$this->load->view('layout/footer');
	}

	public function download_csv()
	{

	}

	public function upload_csv()
	{

	}

	/* For deletting process  */
	public function delete_material($id=0)
	{
		$this->crud_model->delete(MASTER_TOOLING_MATERIAL,array('id' => $id));
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
}
