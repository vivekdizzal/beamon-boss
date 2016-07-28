<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->input->post())
		{
			echo "inserted";
		}

		echo site_url();
		echo "******************</br>";
		echo base_url();

		$this->load->view('layout/header_login.php');
		$this->load->view('welcome_message1');
		$this->load->view('layout/footer_login.php');
	}

	public function dashboard()
	{
		echo site_url();
		echo "******************</br>";
		echo base_url();
		echo "inserted";
	}
}
