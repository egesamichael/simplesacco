<?php
class User extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function auth_check($data)
    {
        $query = $this->db->get_where('staff', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_user($data)
    {
 
        $insert = $this->db->insert('members', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function getmembers()
    {
 
      $this->db->from('members');
  return $num_rows = $this->db->count_all_results();
    }
}