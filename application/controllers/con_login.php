<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('model_login','login');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('Home');
    }

    public function login(){
        $this->form_validation->set_rules('password','Password','min_length[3]');
        if($this->form_validation->run()!=false){
            $res = $this->login->verify_user($_POST['username'],$_POST['password']);
            if($res!=false){
                
                if($res->Position === "OJT"){
                    // check if timed in
                    if($this->login->is_timed_in($res->User_ID, date('Y-m-d'))){
                        // $data['user'] = $res;
                        // $this->load->view('Profile/sched.php', $data); 
                        $schedules($res->User_ID);
                    }else{
                        $data['user'] = $res;
                        $this->load->view('Profile/time_in.php', $data); 
                    }
                }else{
                    $this->load->view('Profile/User_Profile.php');
                }
                $this->login->save_session($this->input->post());
                // redirect("con_profile", "refresh");
            }else{
                $data['title'] = "Syntactics OJT Daily Time Record";
                $data['invalid'] = "Invalid Username and Password";
                $this->load->view('Home',$data);
            }
        }else if($this->form_validation->run()==false){
            $data['title'] = "Syntactics OJT Daily Time Record";
            $this->load->view('Home',$data);

        }
    }

    public function schedules($id)
    {
        $data['sched'] = $this->login->get_sched($id);  
        $data['info'] = $this->login->get_name($id);
        $this->load->view('Profile/sched.php', $data); 
    }
}
