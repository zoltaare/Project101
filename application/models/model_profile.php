<?php

class model_profile extends CI_Model{

  public function search($first_name){
    $this->db->like('First_Name',$first_name,'both');
    return $this->db->get('tblUsers')->result();
  }
  public function find_id($id){
    $query = $this->db->select('User_ID,count(*) as count')->where('User_ID',$id)->from('tblSchedule')->get();
    return $query->row()->User_ID;
  }
  public function save_schedule($data){
    $exist = $this->find_id($data['User_ID']);
    if($exist){
      $this->db->where('User_ID',$exist);
      $this->db->update('tblSchedule',$data);
    }else{
      $this->db->insert('tblSchedule',$data);
    }
    
  }
}
  
      
