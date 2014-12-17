<?php

class model_login extends CI_Model{

	public function verify_user($username,$password){
        $query = $this->db->get_where('tblUsers',array(
        	'Username'=>$username,
        	'Password'=>$password
        ));
		if($query->num_rows > 0){
            return $query->row();
        }
        	return false;
    }
    public function save_session($data){
    	$query = $this->db->get_where('tblUsers', array('Username' => $data['username'],'password' => $data['password']));
        $id = $query->row()->User_ID;
        $sess_data = array('User_ID'=>$id,'Username'=>$data['username'],'Password'=>$data['password'],'logged_in'=>1);
        $this->session->set_userdata($sess_data);
        return $id;
    }
    
    public function is_timed_in($id , $date)
    {
        $query = $this->db->get_where('tblSchedule', array("User_ID" => $id, "Date_sched" => $date));
        if($query->row()->Status === 'timed_in' || $query->row()->Status === 'timed_out')
            return true;
        elseif ($query->row()->Status === 'pre') {
            return false;
        }
    }

    public function get_sched($id='')
    {
        $query = $this->db->get_where('tblSchedule' , array('User_ID' => $id));
        return $query->result_array();
    }

    public function get_sched_today($id , $date)
    {
        //change the sched status here? 
         // $this->db->where();
        $this->db->update('tblSchedule', array('Status' => 'timed_in') , array('User_ID' => $id , 'Date_sched' => $date));
        $this->db->select('Time_in, Time_out');
        $q = $this->db->get_where('tblSchedule', array('User_ID' => $id, 'Date_sched' => $date));
        return $q->row();
    }

    public function get_info($id='')
    {
        $query = $this->db->get_where('tblUsers' , array('User_ID' => $id));
        return $query->result_array();
    }

    public function add_timestamp($dataset='')
    {
        $this->db->insert('tblTimeStamp', $dataset);
    }
}