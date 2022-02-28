
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');        
        $this->load->model('Usermodel');
        $this->load->model('Casemodel');
    }
	
	public function index()
	{	
        /*
        $sessdata=$this->session->userdata('userdtls');	  
		echo '<pre>';
		print_r($this->data);
        print_r($sessdata);
        */
		$this->render_template('cases/index', $this->data);
    }

    public function caseDetails()
	{	
        $c_id=rawurldecode($this->encrypt->decode($_GET['q']));	
        $this->session->set_userdata('cid',$c_id);
		$this->render_template('cases/index2', $this->data);
    }

    public function create()
	{
        $this->data['ps']=$this->Globalmodel->getdata('*','pstation','ps_id','asc');                
        $this->render_template('cases/create', $this->data);
    }

    public function edit()
	{
        $c_id=rawurldecode($this->encrypt->decode($_GET['q']));	

        if(in_array('userlevelcase',$this->permission))
        {
            $u_emailid=$this->session->userdata('userdtls')[0]->u_emailid;
            $this->data['ps']=$this->Globalmodel->getdata_by_field('pstation','ps_emailid',$u_emailid);            
        }
        else{
            $this->data['ps']=$this->Globalmodel->getdata('*','pstation','ps_id','asc');            
        }   
        $this->data['cases']=$this->Casemodel->get_all_cases(array('c_id'=>$c_id));
        $this->render_template('cases/edit', $this->data);
    }

    public function view()
	{
        $c_id=rawurldecode($this->encrypt->decode($_GET['q']));	
        $this->data['ps']=$this->Globalmodel->getdata('*','pstation','ps_id','asc');
        $this->data['cases']=$this->Casemodel->get_all_cases(array('c_id'=>$c_id));
        $this->data['accused']=$this->Casemodel->get_all_accused(array('c_id'=>$c_id));
        $this->data['arrested']=$this->Casemodel->get_all_arrested(array('c_id'=>$c_id));
        $this->data['n41acrpc']=$this->Casemodel->get_all_crpc41(array('c_id'=>$c_id));
        $this->data['soa']=$this->Casemodel->get_all_soa(array('c_id'=>$c_id));
        $this->data['sod']=$this->Casemodel->get_all_sod(array('c_id'=>$c_id));
        $this->data['tip']=$this->Casemodel->get_all_tip(array('c_id'=>$c_id));
        $this->data['n160crpc']=$this->Casemodel->get_all_crpc160(array('c_id'=>$c_id));
        $this->data['n161crpc']=$this->Casemodel->get_all_crpc161(array('c_id'=>$c_id));
        $this->data['medical']=$this->Casemodel->get_all_medical_exam(array('c_id'=>$c_id));
        $this->data['n164crpc_accused']=$this->Casemodel->get_all_crpc164_accused(array('c_id'=>$c_id));
        $this->data['n164crpc_witness']=$this->Casemodel->get_all_crpc164_witness(array('c_id'=>$c_id));
        $this->data['ie27']=$this->Casemodel->get_all_ie27(array('c_id'=>$c_id));
        $this->data['ie32']=$this->Casemodel->get_all_ie32(array('c_id'=>$c_id));
        $this->data['el']=$this->Casemodel->get_all_send_evidence(array('c_id'=>$c_id));
        $this->data['pvd']=$this->Casemodel->get_all_pvd(array('c_id'=>$c_id));
        $this->data['pmreport']=$this->Casemodel->get_all_pmreport(array('c_id'=>$c_id));
        $this->data['finalreport']=$this->Casemodel->get_all_finalreport(array('c_id'=>$c_id));
        $this->data['nextcourse']=$this->Casemodel->get_all_next_course(array('c_id'=>$c_id));
        $this->data['cj']=$this->Casemodel->get_all_cj(array('c_id'=>$c_id));
        //print_r($this->data['n41acrpc']);
        $this->render_template('cases/casedtls', $this->data);
    }

    public function delete()
	{
        
    }  

    public function saveAccused()
	{
        $a_cid=$this->input->post('a_cid');
        $a_name=$this->input->post('a_name');
        $a_fathersname=$this->input->post('a_fathersname');
        $a_address=$this->input->post('a_address');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('accused','a_cid',$a_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($a_name);$i++)
        {
            $data=array(
                'a_cid'=>$a_cid,                            
                'a_name'=>$a_name[$i],                            
                'a_fathersname'=>$a_fathersname[$i],                            
                'a_address'=>$a_address[$i],                            
                'a_datetime'=>date('Y-m-d H:i'), 
                'a_flag'=>1, 
                'a_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            $this->Globalmodel->savedata('accused',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($a_cid)));
    }

    public function saveArrest()
	{
        $a_cid=$this->input->post('arr_cid');
        $a_name=$this->input->post('arr_name');
        $a_fathersname=$this->input->post('arr_fathersname');
        $a_address=$this->input->post('arr_address');
        $a_date=$this->input->post('arr_date');
        $a_time=$this->input->post('arr_time');
        $a_status=$this->input->post('arr_status');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('arrested','a_cid',$a_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($a_name);$i++)
        {
            $data=array(
                'a_cid'=>$a_cid,                            
                'a_name'=>$a_name[$i],                            
                'a_fathersname'=>$a_fathersname[$i],                            
                'a_address'=>$a_address[$i],  
                'a_date'=>date('Y-m-d',strtotime($a_date[$i])),  
                'a_time'=>date('H:i',strtotime($a_time[$i])),  
                'a_status'=>$a_status[$i],  
                'a_datetime'=>date('Y-m-d H:i'), 
                'a_flag'=>1, 
                'a_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('arrested',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($a_cid)));
    }

    public function save41crpcdtls()
    {
        $n41a_cid=$this->input->post('n41a_cid');
        $n41a_date=$this->input->post('n41a_date');
        $n41a_name=$this->input->post('n41a_name');
        $n41a_address=$this->input->post('n41a_address');
        $n41a_complied=$this->input->post('n41a_complied');


        //print($this->input->post);



         /*delete data from accused table*/

         $this->Globalmodel->deletedata('crpc_41a','n41a_cid',$n41a_cid);
         
         /*delete data from accused table*/

         
        for($i=0;$i<count($n41a_name);$i++)
        {
            $data=array(
                'n41A_cid'=>$n41a_cid,                            
                'n41A_date'=>date('Y-m-d',strtotime($n41a_date[$i])),  
                'n41A_name'=>$n41a_name[$i],                                            
                'n41A_address'=>$n41a_address[$i],  
                'n41A_complied'=>$n41a_complied[$i],  
                'n41A_datetime'=>date('Y-m-d H:i'), 
                'n41A_flag'=>1, 
                'n41A_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('crpc_41a',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($n41a_cid)));
        
    }
    
    public function saveSoa()
    {
        $soa_cid=$this->input->post('soa_cid');        
        $soa_name=$this->input->post('soa_name');
        $soa_desc=$this->input->post('soa_desc');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('seizure_of_articles','soa_cid',$soa_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($soa_name);$i++)
        {
            $data=array(
                'soa_cid'=>$soa_cid,                                            
                'soa_name'=>$soa_name[$i],                                            
                'soa_desc'=>$soa_desc[$i],                                            
                'soa_datetime'=>date('Y-m-d H:i'), 
                'soa_flag'=>1, 
                'soa_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('seizure_of_articles',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($soa_cid)));
    }  

    public function saveSod()
    {
        $sod_cid=$this->input->post('sod_cid');        
        $sod_name=$this->input->post('sod_name');
        $sod_desc=$this->input->post('sod_desc');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('seizure_of_documents','sod_cid',$sod_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($sod_name);$i++)
        {
            $data=array(
                'sod_cid'=>$sod_cid,                                            
                'sod_name'=>$sod_name[$i],                                            
                'sod_desc'=>$sod_desc[$i],                                            
                'sod_datetime'=>date('Y-m-d H:i'), 
                'sod_flag'=>1, 
                'sod_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('seizure_of_documents',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($sod_cid)));
    }  

    public function saveTIP()
    {
        $tip_cid=$this->input->post('tip_cid');   
        $tip_date=$this->input->post('tip_date');             
        $tip_status=$this->input->post('tip_status');
        $tip_court=$this->input->post('tip_court');
        /*delete data from accused table*/
        $this->Globalmodel->deletedata('tip','tip_cid',$tip_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($tip_status);$i++)
        {
            $data=array(
                'tip_cid'=>$tip_cid,                                            
                'tip_date'=>date('Y-m-d',strtotime($tip_date[$i])),                                            
                'tip_status'=>$tip_status[$i],    
                'tip_court'=>$tip_court[$i],    
                'tip_datetime'=>date('Y-m-d H:i'), 
                'tip_flag'=>1, 
                'tip_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('tip',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($tip_cid)));
    } 


    public function save160crpcdtls()
    {
        $n160_cid=$this->input->post('n160_cid');
        $n160_date=$this->input->post('n160_date');
        $n160_name=$this->input->post('n160_name');
        $n160_address=$this->input->post('n160_address');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('crpc_160','n160_cid',$n160_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($n160_name);$i++)
        {
            $data=array(
                'n160_cid'=>$n160_cid,                            
                'n160_date'=>date('Y-m-d',strtotime($n160_date[$i])),  
                'n160_name'=>$n160_name[$i],                                            
                'n160_address'=>$n160_address[$i],  
                'n160_datetime'=>date('Y-m-d H:i'), 
                'n160_flag'=>1, 
                'n160_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('crpc_160',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($n160_cid)));
    } 

    public function save161crpcdtls()
    {
        $n161_cid=$this->input->post('n161_cid');
        $n161_date=$this->input->post('n161_date');
        $n161_name=$this->input->post('n161_name');
        $n161_desc=$this->input->post('n161_desc');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('crpc_161','n161_cid',$n161_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($n161_name);$i++)
        {
            $data=array(
                'n161_cid'=>$n161_cid,                            
                'n161_date'=>date('Y-m-d',strtotime($n161_date[$i])),  
                'n161_name'=>$n161_name[$i],                                            
                'n161_desc'=>$n161_desc[$i],  
                'n161_datetime'=>date('Y-m-d H:i'), 
                'n161_flag'=>1, 
                'n161_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('crpc_161',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($n161_cid)));
    } 

    public function saveMedicalExam()
    {
        $me_cid=$this->input->post('me_cid');  
        $me_date=$this->input->post('me_date');              
        $me_desc=$this->input->post('me_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('medical_exam','me_cid',$me_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($me_desc);$i++)
        {
            $data=array(
                'me_cid'=>$me_cid,                                            
                'me_date'=>date('Y-m-d',strtotime($me_date[$i])),                                            
                'me_desc'=>$me_desc[$i],                                            
                'me_datetime'=>date('Y-m-d H:i'), 
                'me_flag'=>1, 
                'me_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('medical_exam',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($me_cid)));
    } 

    public function save164crpc_accuseddtls()
    {
        $n164_cid=$this->input->post('n164_cid'); 
        $n164_date=$this->input->post('n164_date');       
        $n164_name=$this->input->post('n164_name');
        $n164_desc=$this->input->post('n164_desc');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('crpc_164_accused','n164_cid',$n164_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($n164_name);$i++)
        {
            $data=array(
                'n164_cid'=>$n164_cid,                                            
                'n164_date'=>date('Y-m-d',strtotime($n164_date[$i])),  
                'n164_name'=>$n164_name[$i],                                            
                'n164_desc'=>$n164_desc[$i],  
                'n164_datetime'=>date('Y-m-d H:i'), 
                'n164_flag'=>1, 
                'n164_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('crpc_164_accused',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($n164_cid)));
    }

    public function save164crpc_witnessdtls()
    {
        $n164_cid=$this->input->post('n164_cid'); 
        $n164_date=$this->input->post('n164_date');              
        $n164_name=$this->input->post('n164_name');
        $n164_desc=$this->input->post('n164_desc');

         /*delete data from accused table*/
         $this->Globalmodel->deletedata('crpc_164_witness','n164_cid',$n164_cid);
         /*delete data from accused table*/

        for($i=0;$i<count($n164_name);$i++)
        {
            $data=array(
                'n164_cid'=>$n164_cid, 
                'n164_date'=>date('Y-m-d',strtotime($n164_date[$i])),                                             
                'n164_name'=>$n164_name[$i],                                            
                'n164_desc'=>$n164_desc[$i],  
                'n164_datetime'=>date('Y-m-d H:i'), 
                'n164_flag'=>1, 
                'n164_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );

            //print_r($data);

            $this->Globalmodel->savedata('crpc_164_witness',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($n164_cid)));
    }

    public function saveie27()
    {
        $ie27_cid=$this->input->post('ie27_cid');                
        $ie27_desc=$this->input->post('ie27_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('ie_27','ie27_cid',$ie27_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($ie27_desc);$i++)
        {
            $data=array(
                'ie27_cid'=>$ie27_cid,                                            
                'ie27_desc'=>$ie27_desc[$i],                                            
                'ie27_datetime'=>date('Y-m-d H:i'), 
                'ie27_flag'=>1, 
                'ie27_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('ie_27',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($ie27_cid)));
    } 

    public function saveie32()
    {
        $ie32_cid=$this->input->post('ie32_cid');                
        $ie32_desc=$this->input->post('ie32_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('ie_32','ie32_cid',$ie32_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($ie32_desc);$i++)
        {
            $data=array(
                'ie32_cid'=>$ie32_cid,                                            
                'ie32_desc'=>$ie32_desc[$i],                                            
                'ie32_datetime'=>date('Y-m-d H:i'), 
                'ie32_flag'=>1, 
                'ie32_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('ie_32',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($ie32_cid)));
    } 


    public function savesendexhibit()
    {
        $el_cid=$this->input->post('el_cid');                
        $el_desc=$this->input->post('el_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('exhibit_to_lab','el_cid',$el_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($el_desc);$i++)
        {
            $data=array(
                'el_cid'=>$el_cid,                                            
                'el_desc'=>$el_desc[$i],                                            
                'el_datetime'=>date('Y-m-d H:i'), 
                'el_flag'=>1, 
                'el_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('exhibit_to_lab',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($el_cid)));
    } 


    public function savepovisit()
    {
        $pvd_cid=$this->input->post('pvd_cid');                
        $pvd_date=$this->input->post('pvd_date');
        $pvd_desc=$this->input->post('pvd_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('po_visit_details','pvd_cid',$pvd_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($pvd_desc);$i++)
        {
            $data=array(
                'pvd_cid'=>$pvd_cid,                                            
                'pvd_date'=>date('Y-m-d',strtotime($pvd_date[$i])),                                            
                'pvd_desc'=>$pvd_desc[$i],                                            
                'pvd_datetime'=>date('Y-m-d H:i'), 
                'pvd_flag'=>1, 
                'pvd_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('po_visit_details',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($pvd_cid)));
    } 

    public function savepmreport()
    {
        $pr_cid=$this->input->post('pr_cid');
        $pr_date=$this->input->post('pr_date');
        $pr_doc_name=$this->input->post('pr_doc_name');                
        $pr_desc=$this->input->post('pr_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('pm_report','pr_cid',$pr_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($pr_desc);$i++)
        {
            $data=array(
                'pr_cid'=>$pr_cid,      
                'pr_date'=>date('Y-m-d',strtotime($pr_date[$i])),                                            
                'pr_doc_name'=>$pr_doc_name[$i],                                                                                  
                'pr_desc'=>$pr_desc[$i],                                            
                'pr_datetime'=>date('Y-m-d H:i'), 
                'pr_flag'=>1, 
                'pr_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('pm_report',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($pr_cid)));
    } 

    public function savefinalreport()
    {
        $fr_cid=$this->input->post('fr_cid');
        $fr_date=$this->input->post('fr_date');
        $fr_type=$this->input->post('fr_type');                
        $fr_desc=$this->input->post('fr_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('final_report','fr_cid',$fr_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($fr_desc);$i++)
        {
            $data=array(
                'fr_cid'=>$fr_cid,      
                'fr_date'=>date('Y-m-d',strtotime($fr_date[$i])),                                            
                'fr_type'=>$fr_type[$i],                                                                                  
                'fr_desc'=>$fr_desc[$i],                                            
                'fr_datetime'=>date('Y-m-d H:i'), 
                'fr_flag'=>1, 
                'fr_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('final_report',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($fr_cid)));
    } 

    public function savenextcourse()
    {
        $ncp_cid=$this->input->post('ncp_cid');        
        $ncp_desc=$this->input->post('ncp_desc');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('next_course_proposed','ncp_cid',$ncp_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($ncp_desc);$i++)
        {
            $data=array(
                'ncp_cid'=>$ncp_cid,                      
                'ncp_desc'=>$ncp_desc[$i],                                            
                'ncp_datetime'=>date('Y-m-d H:i'), 
                'ncp_flag'=>1, 
                'ncp_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('next_course_proposed',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($ncp_cid)));
    } 

    public function savecj()
    {
       /* `cj_cid`, `cj_courtname`, `cj_justicename`, `cj_courtno`, `cj_caseno`, 
        `cj_petition_date`, `cj_hearing_date`, `cj_staterep`, `cj_status`, 
        `cj_special_remarks`, `cj_datetime`, `cj_flag`, `cj_userid`
        */

        $cj_cid=$this->input->post('cj_cid');        
        $cj_courtname=$this->input->post('cj_courtname');
        $cj_justicename=$this->input->post('cj_justicename');
        $cj_courtno=$this->input->post('cj_courtno');
        $cj_caseno=$this->input->post('cj_caseno');
        $cj_petition_date=$this->input->post('cj_petition_date');
        $cj_hearing_date=$this->input->post('cj_hearing_date');
        $cj_staterep=$this->input->post('cj_staterep');
        $cj_status=$this->input->post('cj_status');
        $cj_special_remarks=$this->input->post('cj_special_remarks');

        /*delete data from accused table*/
        $this->Globalmodel->deletedata('court_judgement','cj_cid',$cj_cid);
        /*delete data from accused table*/

        for($i=0;$i<count($cj_courtname);$i++)
        {
            $data=array(
                'cj_cid'=>$cj_cid,                      
                'cj_courtname'=>$cj_courtname[$i],                      
                'cj_justicename'=>$cj_justicename[$i],                      
                'cj_courtno'=>$cj_courtno[$i],                      
                'cj_caseno'=>$cj_caseno[$i],                      
                'cj_petition_date'=>date('Y-m-d',strtotime($cj_petition_date[$i])),                      
                'cj_hearing_date'=>date('Y-m-d',strtotime($cj_hearing_date[$i])),                      
                'cj_staterep'=>$cj_staterep[$i],                      
                'cj_status'=>$cj_status[$i],                      
                'cj_special_remarks'=>$cj_special_remarks[$i],                                      
                'cj_datetime'=>date('Y-m-d H:i'), 
                'cj_flag'=>1, 
                'cj_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            //print_r($data);
            $this->Globalmodel->savedata('court_judgement',$data);
        }
        $this->session->set_flashdata('successmsg','Case Successfully Saved');	
        redirect('Cases/view?q='.urlencode($this->encrypt->encode($cj_cid)));
    } 
    
    public function saveCases()
	{
        /*
        `c_date`, `c_ps`, `c_caseref`, `c_undersection`, `c_brieffact`, `c_complainant`,
         `c_complainant_mobileno`, `c_datetime`, `c_flag`, `c_userid`
        */

        $this->form_validation->set_rules('c_date', 'Case Date', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="text-danger font-weight-bold">', '</div>');
        
        if ($this->form_validation->run() == TRUE) 
		{
            $data=array(
                'c_date'=>date('Y-m-d',strtotime($this->input->post('c_date'))),                
                'c_ps'=>$this->input->post('c_ps'),                
                'c_head'=>$this->input->post('c_head'),
                'c_caseref'=>$this->input->post('c_caseref'),
                'c_undersection'=>$this->input->post('c_undersection'),
                'c_brieffact'=>$this->input->post('c_brieffact'),
                'c_complainant'=>$this->input->post('c_complainant'),
                'c_complainant_address'=>$this->input->post('c_complainant_address'),                
                'c_complainant_mobileno'=>$this->input->post('c_complainant_mobileno'),
                'c_datetime'=>date('Y-m-d H:i'), 
                'c_flag'=>1, 
                'c_userid'=>$this->session->userdata('userdtls')[0]->u_id
            );
            $this->Globalmodel->savedata('cases',$data);
            $this->session->set_flashdata('successmsg','Case Successfully Saved');	


            if(in_array('userlevelcase',$this->permission))
            {
                redirect('Dashboard/user');
            }
            else{
                redirect('Dashboard');
            }

        }
        else{
            $this->data['ps']=$this->Globalmodel->getdata('*','pstation','ps_id','asc');            
			$this->render_template('cases/create', $this->data);
		}
    }  

    public function updateCases()
	{
        $c_id=rawurldecode($this->encrypt->decode($_GET['q']));		
        $data=array(
            'c_date'=>date('Y-m-d',strtotime($this->input->post('c_date'))),                
            'c_ps'=>$this->input->post('c_ps'),
            'c_head'=>$this->input->post('c_head'),                
            'c_caseref'=>$this->input->post('c_caseref'),
            'c_undersection'=>$this->input->post('c_undersection'),
            'c_brieffact'=>$this->input->post('c_brieffact'),
            'c_complainant'=>$this->input->post('c_complainant'),
            'c_complainant_address'=>$this->input->post('c_complainant_address'),                
            'c_complainant_mobileno'=>$this->input->post('c_complainant_mobileno'),
            'c_datetime'=>date('Y-m-d H:i'), 
            'c_flag'=>1, 
            'c_userid'=>$this->session->userdata('userdtls')[0]->u_id
        );
        //echo '<pre>';
        //print_r($data);
        $this->Globalmodel->updatedata('cases','c_id',$c_id,$data);
        $this->session->set_flashdata('successmsg','Case Successfully Updated');	
        redirect('Cases/caseDetails?q='.urlencode($this->encrypt->encode($c_id)));
    }  

    public function getCases()
	{
        if(in_array('userlevelcase',$this->permission))
        {
            $u_id=$this->session->userdata('userdtls')[0]->u_id;
            $cases=$this->Usermodel->get_user_cases(array('u_id'=>$u_id));
        }
        else{
            $cases=$this->Casemodel->get_all_cases(array());
        }  

        /*
        `c_date`, `c_ps`, `c_caseref`, `c_undersection`, `c_brieffact`, `c_complainant`,
         `c_complainant_mobileno`, `c_datetime`, `c_flag`, `c_userid`
        */
        
        $data = array();
        $i=1;
		foreach($cases as $r)
		{

            $c_id=$r->c_id;
            $this->data['accused']=$this->Casemodel->get_all_accused(array('c_id'=>$c_id));
            $this->data['arrested']=$this->Casemodel->get_all_arrested(array('c_id'=>$c_id));
            $this->data['n41acrpc']=$this->Casemodel->get_all_crpc41(array('c_id'=>$c_id));
            $this->data['soa']=$this->Casemodel->get_all_soa(array('c_id'=>$c_id));
            $this->data['sod']=$this->Casemodel->get_all_sod(array('c_id'=>$c_id));
            $this->data['tip']=$this->Casemodel->get_all_tip(array('c_id'=>$c_id));
            $this->data['n160crpc']=$this->Casemodel->get_all_crpc160(array('c_id'=>$c_id));
            $this->data['n161crpc']=$this->Casemodel->get_all_crpc161(array('c_id'=>$c_id));
            $this->data['medical']=$this->Casemodel->get_all_medical_exam(array('c_id'=>$c_id));
            $this->data['n164crpc_accused']=$this->Casemodel->get_all_crpc164_accused(array('c_id'=>$c_id));
            $this->data['n164crpc_witness']=$this->Casemodel->get_all_crpc164_witness(array('c_id'=>$c_id));
            $this->data['ie27']=$this->Casemodel->get_all_ie27(array('c_id'=>$c_id));
            $this->data['ie32']=$this->Casemodel->get_all_ie32(array('c_id'=>$c_id));
            $this->data['el']=$this->Casemodel->get_all_send_evidence(array('c_id'=>$c_id));
            $this->data['pvd']=$this->Casemodel->get_all_pvd(array('c_id'=>$c_id));
            $this->data['pmreport']=$this->Casemodel->get_all_pmreport(array('c_id'=>$c_id));
            $this->data['finalreport']=$this->Casemodel->get_all_finalreport(array('c_id'=>$c_id));
            $this->data['nextcourse']=$this->Casemodel->get_all_next_course(array('c_id'=>$c_id));
            $this->data['cj']=$this->Casemodel->get_all_cj(array('c_id'=>$c_id));

            $sub_array = array();
            $sub_array[] = $i++;
            
            $str='';           
            $str.='&nbsp;<a role="button" href="'.base_url('Cases/edit?q='.urlencode($this->encrypt->encode($r->c_id))).'" class="btn waves-effect waves-light btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>';                
            if(in_array('viewcase',$this->permission))
            {
                $str.='&nbsp;<a role="button" href="'.base_url('Cases/view?q='.urlencode($this->encrypt->encode($r->c_id))).'" class="btn waves-effect waves-light btn-info btn-sm"><i class="fas fa-eye"></i> Details</a>';                
            
            }
           
            $sub_array[] = $str;

            $sub_array[] = date('d-M-Y',strtotime($r->c_date));
            $sub_array[] = $r->ps_name;
            $sub_array[] = $r->c_caseref;
            $sub_array[] = $r->c_undersection;
            //$sub_array[] = $r->c_brieffact;
            $sub_array[] = $r->c_complainant;
            $sub_array[] = $r->c_complainant_address;            
            $sub_array[] = $r->c_complainant_mobileno; 
            
            $sub_array[] = !empty($this->data['accused'])?count($this->data['accused']).' Person(s)':'No Accused Yet'; 
            $sub_array[] = !empty($this->data['arrested'])?count($this->data['arrested']).' Person(s)':'Not Arrested Yet'; 
            $sub_array[] = !empty($this->data['n41acrpc'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['soa'])?count($this->data['soa']).' Found':'Not Found'; 
            $sub_array[] = !empty($this->data['sod'])?count($this->data['sod']).' Found':'Not Found'; 
            $sub_array[] = !empty($this->data['tip'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n160crpc'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n161crpc'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['medical'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n164crpc_accused'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n164crpc_witness'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['ie27'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['ie32'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['el'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['pvd'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['pmreport'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['finalreport'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['nextcourse'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['cj'])?'Done':'Not Done'; 
           
			$data[] = $sub_array;
		}
		$output = array(			
			"data"   =>  $data
		   );
		   
		echo json_encode($output);
    }


    public function getCasesById($cid)
	{
        /*if(in_array('userlevelcase',$this->permission))
        {
            $u_id=$this->session->userdata('userdtls')[0]->u_id;
            $cases=$this->Usermodel->get_user_cases(array('u_id'=>$u_id));
        }
        else{
        */

        $cases=$this->Casemodel->get_all_cases(array('c_id'=>$cid));

        //}  

        /*
        `c_date`, `c_ps`, `c_caseref`, `c_undersection`, `c_brieffact`, `c_complainant`,
         `c_complainant_mobileno`, `c_datetime`, `c_flag`, `c_userid`
        */
        
        $data = array();
        $i=1;
		foreach($cases as $r)
		{

            $c_id=$r->c_id;
            $this->data['accused']=$this->Casemodel->get_all_accused(array('c_id'=>$c_id));
            $this->data['arrested']=$this->Casemodel->get_all_arrested(array('c_id'=>$c_id));
            $this->data['n41acrpc']=$this->Casemodel->get_all_crpc41(array('c_id'=>$c_id));
            $this->data['soa']=$this->Casemodel->get_all_soa(array('c_id'=>$c_id));
            $this->data['sod']=$this->Casemodel->get_all_sod(array('c_id'=>$c_id));
            $this->data['tip']=$this->Casemodel->get_all_tip(array('c_id'=>$c_id));
            $this->data['n160crpc']=$this->Casemodel->get_all_crpc160(array('c_id'=>$c_id));
            $this->data['n161crpc']=$this->Casemodel->get_all_crpc161(array('c_id'=>$c_id));
            $this->data['medical']=$this->Casemodel->get_all_medical_exam(array('c_id'=>$c_id));
            $this->data['n164crpc_accused']=$this->Casemodel->get_all_crpc164_accused(array('c_id'=>$c_id));
            $this->data['n164crpc_witness']=$this->Casemodel->get_all_crpc164_witness(array('c_id'=>$c_id));
            $this->data['ie27']=$this->Casemodel->get_all_ie27(array('c_id'=>$c_id));
            $this->data['ie32']=$this->Casemodel->get_all_ie32(array('c_id'=>$c_id));
            $this->data['el']=$this->Casemodel->get_all_send_evidence(array('c_id'=>$c_id));
            $this->data['pvd']=$this->Casemodel->get_all_pvd(array('c_id'=>$c_id));
            $this->data['pmreport']=$this->Casemodel->get_all_pmreport(array('c_id'=>$c_id));
            $this->data['finalreport']=$this->Casemodel->get_all_finalreport(array('c_id'=>$c_id));
            $this->data['nextcourse']=$this->Casemodel->get_all_next_course(array('c_id'=>$c_id));
            $this->data['cj']=$this->Casemodel->get_all_cj(array('c_id'=>$c_id));

            $sub_array = array();
            $sub_array[] = $i++;
            
            $str='';           
            $str.='&nbsp;<a role="button" href="'.base_url('Cases/edit?q='.urlencode($this->encrypt->encode($r->c_id))).'" class="btn waves-effect waves-light btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>';                
            if(in_array('viewcase',$this->permission))
            {
                $str.='&nbsp;<a role="button" href="'.base_url('Cases/view?q='.urlencode($this->encrypt->encode($r->c_id))).'" class="btn waves-effect waves-light btn-info btn-sm"><i class="fas fa-eye"></i> Details</a>';                
            
            }
           
            $sub_array[] = $str;

            $sub_array[] = date('d-M-Y',strtotime($r->c_date));
            $sub_array[] = $r->ps_name;
            $sub_array[] = $r->c_caseref;
            $sub_array[] = $r->c_undersection;
            //$sub_array[] = $r->c_brieffact;
            $sub_array[] = $r->c_complainant;
            $sub_array[] = $r->c_complainant_address;            
            $sub_array[] = $r->c_complainant_mobileno; 
            
            $sub_array[] = !empty($this->data['accused'])?count($this->data['accused']).' Person(s)':'No Accused Yet'; 
            $sub_array[] = !empty($this->data['arrested'])?count($this->data['arrested']).' Person(s)':'Not Arrested Yet'; 
            $sub_array[] = !empty($this->data['n41acrpc'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['soa'])?count($this->data['soa']).' Found':'Not Found'; 
            $sub_array[] = !empty($this->data['sod'])?count($this->data['sod']).' Found':'Not Found'; 
            $sub_array[] = !empty($this->data['tip'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n160crpc'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n161crpc'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['medical'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n164crpc_accused'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['n164crpc_witness'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['ie27'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['ie32'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['el'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['pvd'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['pmreport'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['finalreport'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['nextcourse'])?'Done':'Not Done'; 
            $sub_array[] = !empty($this->data['cj'])?'Done':'Not Done'; 
           
			$data[] = $sub_array;
		}
		$output = array(			
			"data"   =>  $data
		   );
		   
		echo json_encode($output);
    }

    
}   


