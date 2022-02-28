
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends My_Controller 
{
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Kolkata');			
    }

    public function getColumns()
	{
        $d= array (
                array('name'=>'c_date','title'=>'Case Date','breakpoints'=>'xs sm'),
                array('name'=>'c_intermediary','title'=>'intermediary','breakpoints'=>'xs sm'),                
            );  
        //echo '<pre>';
        print_r(json_encode($d));
    }

    public function getRows()
	{
        $d= $this->Globalmodel->getdata('c_date,c_intermediary','cases');
        //echo '<pre>';
        print_r(json_encode($d));
    }
}   


