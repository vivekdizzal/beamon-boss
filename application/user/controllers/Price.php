<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		/*get the material,time and accessory price from the table and display here*/
		$data['time_cost'] =  $this->crud_model->get('boss_master_tooling_timing');
		$data['material_cost'] = $this->crud_model->get('boss_master_tooling_material');
		$data['accessory_cost'] = $this->crud_model->get('boss_master_accssories');


		$this->load->view('layouts/header');
		$this->load->view('price/list_price',$data);
		$this->load->view('layouts/footer');
	}
}