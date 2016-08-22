<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		//$this->load->view('dashboard/dashboard');
	}


	/*function to add new quotes*/
	public function add_new_quotes()
	{
		if($this->input->post())
		{
			$quote_data = array(
						'engineer_id' => "2",
						'email_id' => $this->input->post('primary_email'),
						'company_id' => $this->input->post('customer'),
						'customer_id' => $this->input->post('customer'),
						'date_created' => Date('Y-m-d'),
						'tooling_exist' => "1",
						'quote_status' 	=>"1",
						'quote_type'	=> "0",
						'status'	=> "1"
					  );

		$id = $this->crud_model->insert('boss_quotes',$quote_data);
		redirect('tooling/index/'.$id);
		}
		$this->load->view('layouts/header');
		$this->load->view('quotes/quotes_add');
		$this->load->view('layouts/footer');
	}

	/*
		function is to view quotes
	*/
	public function view_quotes($quote_id="0")
	{
		//fetch the information from the quote model and update here
	}

	public function add_tooling()
	{
				
	}
	
	public function rfq()
	{
		$this->load->view('layouts/header');
		$this->load->view('rfq_view');
		$this->load->view('layouts/footer');
	}


	public function rfq_action()
	{
		echo "<pre>";
		print_r($_POST);
	}

}