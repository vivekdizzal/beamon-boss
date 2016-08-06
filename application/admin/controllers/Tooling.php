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
		$this->load->view('layout/header.php');
		$this->load->view('material/list_material');
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
			$this->crud_model->insert('boss_master_tooling_material',$data);
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
			
		}

		$this->load->view('layout/header');
		$this->load->view('material/edit_material');
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
			$this->crud_model->insert('boss_master_accssories',$data);
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
			echo "<pre>";
			print_r($_POST);
			exit;
		}
		$this->load->view('layout/header');
		$this->load->view('accessory/edit_accessory');
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
			$this->crud_model->insert('boss_master_tooling_timing',$data);
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
			$this->crud_model->insert('boss_master_fixture_list',$data);
			redirect('tooling/list_fixture');

		}
		$this->load->view('layout/header');
		$this->load->view('fixture/add_fixture');
		$this->load->view('layout/footer');

	}


	public function list_fixture()
	{
		$this->load->view('layout/header');
		$this->load->view('fixture/list_fixture');
		$this->load->view('layout/footer');
	}


	public function list_time()
	{
		$this->load->view('layout/header');
		$this->load->view('time/list_time');
		$this->load->view('layout/footer');
	}


	public function download_csv()
	{

	}

	public function upload_csv()
	{

	}
}
