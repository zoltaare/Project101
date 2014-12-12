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
                        // $schedules($res->User_ID);
                        redirect('/con_ojt', 'refresh');
                    }else{
                        $data['user'] = $res;
                        $data['sched_now'] = $this->login->get_sched_today($res->User_ID, date('Y-m-d'));
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

   public function timestamp()
   {
        // echo $this->input->post('time_in');
        $dataset = array(
            'Time_ID' => NULL,
            'Date' => $this->input->post('date'),
            'Time_in' => $this->input->post('time_in'),
            'Time_out' => '',
            'Officer_In_Charge' => '',
            'Validate_Status' => '',
            'User_ID' => $this->input->post('user_id')
        );
        $this->login->add_timestamp($dataset);
        echo "success add timestamp.";
   }


} //@end main
