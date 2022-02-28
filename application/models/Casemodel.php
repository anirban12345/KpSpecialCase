<?php
class Casemodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_all_cases($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('pstation','cases.c_ps=pstation.ps_id');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_accused($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('accused','cases.c_id=accused.a_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}


	public function get_all_arrested($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('arrested','cases.c_id=arrested.a_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_crpc41($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('crpc_41a','cases.c_id=crpc_41a.n41A_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_crpc160($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('crpc_160','cases.c_id=crpc_160.n160_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_crpc161($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('crpc_161','cases.c_id=crpc_161.n161_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_soa($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('seizure_of_articles','cases.c_id=seizure_of_articles.soa_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_sod($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('seizure_of_documents','cases.c_id=seizure_of_documents.sod_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_tip($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('tip','cases.c_id=tip.tip_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_medical_exam($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('medical_exam','cases.c_id=medical_exam.me_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_crpc164_accused($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('crpc_164_accused','cases.c_id=crpc_164_accused.n164_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_crpc164_witness($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('crpc_164_witness','cases.c_id=crpc_164_witness.n164_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}


	public function get_all_ie27($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('ie_27','cases.c_id=ie_27.ie27_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}


	public function get_all_ie32($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('ie_32','cases.c_id=ie_32.ie32_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_send_evidence($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('exhibit_to_lab','cases.c_id=exhibit_to_lab.el_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_pvd($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('po_visit_details','cases.c_id=po_visit_details.pvd_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_pmreport($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('pm_report','cases.c_id=pm_report.pr_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_finalreport($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('final_report','cases.c_id=final_report.fr_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_next_course($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('next_course_proposed','cases.c_id=next_course_proposed.ncp_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_all_cj($array)
	{
		$this->db->select('*');		
		$this->db->from('cases');
		$this->db->join('court_judgement','cases.c_id=court_judgement.cj_cid');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	

}

?>