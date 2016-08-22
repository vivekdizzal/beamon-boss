<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tooling extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index($id=0)
	{
		/*
			generate quote reference number
		*/
			
		/*
			Insert here in quote table
		*/
		
		//End of inserting in quote table

		$data['fixture_list'] = $this->crud_model->get('boss_master_fixture_list');
		$data['material_list'] = $this->crud_model->get('boss_master_tooling_material');
		$data['standard_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Standard'));
		$data['complex_timing'] = $this->crud_model->get('boss_master_tooling_timing',array('design_complex' => 'Complex'));
		$data['accessories_list'] = $this->crud_model->get('boss_master_accssories');
		$data['mark_up'] = $this->crud_model->get('boss_master_markup');
		$data['tooling_extra_material_inch'] = $this->crud_model->get('boss_master_extra_material');
		$data['quote_id'] = $id;

		$this->load->view('layouts/header');
		$this->load->view('tooling/add_tooling',$data);
		$this->load->view('layouts/footer');
	}

	public function add_tooling()
	{
		echo "<pre>";
		print_r($_POST);
		exit;
	}

}
