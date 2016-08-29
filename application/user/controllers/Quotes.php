<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->view('layouts/header');
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
			/*
				generate quote reference number
			*/
			$quote_ref = $this->input->post('engineer_id')."tq".$this->input->post('customer');

			//count the secondary email
			$email_cc_count = count($_POST['secondary_email']);
			$email_cc = "";
			if($email_cc_count > 0)
			{

				for($i = 0;$i < $email_cc_count; $i++)
				$email_cc .= $this->input->post('secondary_email')[$i].",";
			}

			$quote_data = array(
						'quote_ref' => $quote_ref,
						'engineer_id' => "2",
						'email_id' => $this->input->post('primary_email'),
						'email_id_cc' => $email_cc,
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
	/*Function to view the status*/
	public function quote_status()
	{
		//get list of quotes from quotes table
		$data['records'] = $this->crud_model->get('boss_quotes');
		$this->load->view('quotes/quote_list',$data);
		$this->load->view('layouts/footer');


	}

	/*
		function is to view quotes
	*/
	public function view_quotes($quote_id=0)
	{
		//fetch the information from the quote model and update here
	}



}