<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
    
	public function index()
	{
		$this->load->view('dashboard/dashboard');
	}

	/*
		Function is used to generate the report in the form of csv 
	*/
	public function reports()
	{

	}
}