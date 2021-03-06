<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index()
	{
		if($this->input->post())
		{	
			/*$this->form_validation->set_rules('usr_logname', 'Username', 'trim|required');
            $this->form_validation->set_rules('usr_logpwd', 'Password', 'trim|required|callback_check_database');

            if ($this->form_validation->run()) {*/
                redirect('dashboard');
            //}
		}

		$this->load->view('layouts/header_login.php');
		$this->load->view('login');
		$this->load->view('layouts/footer_login.php');
	}

	public function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('usr_logname');

        //query the database
        $result = $this->user_model->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->usr_id,
                    'user_logname' => $row->usr_logname
                );

                $this->session->set_userdata('logged_in', $sess_array);
                $this->session->set_userdata('user_id', $row->usr_id);
                $this->session->set_userdata('userlogname', $row->usr_logname);
                $this->session->set_userdata('user_name', $row->usr_name);
                $this->session->set_userdata('user_mobile', $row->usr_mobile);
                $this->session->set_userdata('user_email', $row->usr_email);
                $this->session->set_userdata('user_designation', $row->usr_designation);
                $this->session->set_userdata('user_city', $row->usr_city);
                $this->session->set_userdata('profile_image', $row->usr_photo);
                $this->session->set_userdata('user_type', $row->usr_type);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }


	public function logout()
	{
		redirect(base_url());
	}

	
}