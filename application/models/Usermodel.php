<?php
class Usermodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_user_cases($array)
	{
		$this->db->select('*');
		$this->db->from('cases');
		$this->db->join('pstation','cases.c_ps=pstation.ps_id');		
		$this->db->join('users','users.u_emailid=pstation.ps_emailid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_user($array)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_group','users.u_ugid=user_group.ug_id');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

}

?>