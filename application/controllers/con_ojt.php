<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_ojt extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('model_login','login');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

	public function schedules()
	{
		$data['sched'] = $this->login->get_sched($this->session->userdata('User_ID'));  
        $data['info'] = $this->login->get_info($this->session->userdata('User_ID'));
        $this->load->view('Profile/sched.php', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}

}