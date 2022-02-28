<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Kolkata');			
    }
	
	public function index()
	{	
		/*$sessdata=$this->session->userdata('userdtls');	  
		echo '<pre>';
		print_r($this->data);
		print_r($sessdata);		
		*/		
		//print_r($user_permission);
		//print_r($this->data['user_permission']);
		
		$this->load->model('Casemodel');
		$this->load->model('Usermodel');

		$this->data['all']=$this->Casemodel->get_all_cases(array());

		$this->data['users']=count($this->Usermodel->get_user(array()));

		$arr=['bg-primary','bg-secondary','bg-warning','bg-success','bg-danger','bg-info','bg-dark'];

		foreach($this->data['all'] as $r)
		{
			$rand=rand(0,6);
			$r->color=$arr[$rand];
		}
		//echo '<pre>';
		//print_r($this->data['important']);

		$this->render_template('dashboard/dashboard', $this->data);

		//redirect('Cases');

	}

	public function user()
	{	
		/*$sessdata=$this->session->userdata('userdtls');	  
		echo '<pre>';
		print_r($this->data);
		print_r($sessdata);
		*/
		//print_r($this->permission);
		$this->load->model('Usermodel');
		$u_id=$this->session->userdata('userdtls')[0]->u_id;
		
		//echo '<pre>';
		//print_r($data);
		$this->data['all']=$this->Usermodel->get_user_cases(array('u_id'=>$u_id));
		
		$arr=['bg-primary','bg-secondary','bg-warning','bg-success','bg-danger','bg-info','bg-dark'];

		foreach($this->data['all'] as $r)
		{
			$rand=rand(0,6);
			$r->color=$arr[$rand];
		}

		//echo '<pre>';
		//print_r($this->data['all']);

		/*
		$caseupdatedtls=$this->Globalmodel->getdata_by_field_join_array('users','u_id','case_update','cu_userid',array('u_id'=>$u_id),'cu_datetime', 'desc');
		if(count($caseupdatedtls)>0)
		{
			$this->data['caseupdate']=$caseupdatedtls;
		}
		else
		{
			$update=new stdClass;
			$update->cu_c_id='0';
			$update->cu_title='No Updates';
			$update->cu_datetime=date('d-M-Y h:i A');
			$update->u_emailid='No Updates';
			$caseupdatedtls=array($update);
			$this->data['caseupdate']=$caseupdatedtls;
		}
		*/	
		$this->render_template('dashboard/dashboard2', $this->data);		
	}
}
