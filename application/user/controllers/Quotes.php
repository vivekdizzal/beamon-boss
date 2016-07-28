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

}