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

	public function add_material()
	{

		if($this->input->post())
		{
			echo "<pre>";
			print_r($_POST);
			exit;
		}
		$this->load->view('material/add_material');
	}

	public function edit_material($id=0)
	{
		if($this->input->post())
		{
			echo "<pre>";
			print_r($_POST);
			exit;
		}
		$this->load->view('material/edit_material');
	}

	public function add_accessories()
	{
		if($this->input->post())
		{
			echo "<pre>";
			print_r($_POST);
			exit;
		}
		$this->load->view('accessory/add_accesssory');
	}

	public function edit_accessories($id=0)
	{
		if($this->input->post())
		{
			echo "<pre>";
			print_r($_POST);
			exit;
		}
		$this->load->view('accessory/edit_accessory');
	}

	public function add_time()
	{
		if($this->input->post())
		{
			echo "<pre>";
			print_r($_POST);
			exit;
		}
		$this->load->view('time/add_time.php');
	}

	public function add_fixture()
	{
		if($this->input->post())
		{
			$
		}
		$this->load->view('fixture/add_fixture');
	}

	public function download_csv()
	{

	}

	public function upload_csv()
	{

	}
}
