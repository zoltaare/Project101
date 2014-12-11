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
                // $this->user_log();
                // $position = $res->Position;
                
                if($res->Position === "OJT"){
                    $this->load->view('Profile/ojt.php');
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

}
