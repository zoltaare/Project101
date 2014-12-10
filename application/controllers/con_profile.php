<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_profile extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('model_profile','profile');
        // $this->load->library('form_validation');
    }

    public function profile(){
    	$this->load->view('Profile/Registration.php');
    }
    public function scheduling(){
    	$this->load->view('Admin/Scheduling.php');
    }
    public function validate(){
        $this->load->view('Admin/Validate.php');
    }
    public function search_name($first_name){
        $result = $this->profile->search($first_name);
        if(count($result) > 0 ){
            foreach($result as $pr)
                $arr_result[] = $pr->First_Name;
                echo json_encode($arr_result);
        }
    }

    public function submit_schedule(){
        
        var_dump($_POST);
        // $this->profile->save_schedule($_POST);
    }
}