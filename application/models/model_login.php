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
    
}