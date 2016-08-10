<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tooling extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$data['fixture_list'] = $this->crud_model->get('boss_master_fixture_list');
		$data['material_list'] = $this->crud_model->get('boss_master_tooling_material');
		$data['standard_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Standard'));

		$data['accessories_list'] = $this->crud_model->get('boss_master_accssories');
		$this->load->view('layouts/header');
		$this->load->view('tooling/add_tooling',$data);
		$this->load->view('layouts/footer');
	}

}
