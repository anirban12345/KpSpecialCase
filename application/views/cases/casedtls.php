
<div class="page-wrapper">

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">View Cases</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Cases</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View Cases</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card" id="myform">
                <?php foreach($cases as $r){?>

                <div class="card-body">
                    <h4 class="card-title">Case Details</h4>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label class="m-t-20">Case Date</label>
                            <div><?=date('d-F-Y',strtotime($r->c_date))?></div>                                                                   
                        </div>
                        
                        <div class="col-12 col-md-4">
                            <label class="m-t-20">PS</label>                            
                                <?php foreach($ps as $r1){ 
                                    if($r->c_ps==$r1->ps_id){
                                ?>
                                    <div><?=$r1->ps_name?></div>
                                <?php }} ?>   
                            </select>   
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="m-t-20">Case Ref</label>
                            <div><?=$r->c_caseref?></div>                            
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="m-t-20">Under Section</label>
                            <div><?=$r->c_undersection?></div>                            
                        </div>

                        <div class="col-12 col-md-8">
                            <label class="m-t-20">Brief Fact</label>
                            <div><?=$r->c_brieffact?></div>                            
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="m-t-20">Complainant Name</label>
                            <div><?=$r->c_complainant?></div>                            
                        </div>
                        
                        <div class="col-12 col-md-4">
                            <label class="m-t-20">Complainant Address</label>
                            <div><?=$r->c_complainant_address?></div>                            
                        </div>

                        <div class="col-12 col-md-4">
                            <label class="m-t-20">Complainant Mobile No</label>
                            <div><?=$r->c_complainant_mobileno?></div>                            
                        </div>

                        <?php } ?>                           
                    </div>  
                </div> 
            </div>

            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Accused Details</h4>            
            <button type="button" name="add" id="add" class="btn waves-effect waves-light btn-success">Add Accused</button>
            
            <form action="<?=base_url('Cases/saveAccused')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="a_cid" id="a_cid" />          

            <div id="dynamic_field" style="width:100%;">
                 <?php $i=1;foreach($accused as $r){?>                           
                    <div id="row<?=$i?>">
                    <div class="row border">
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Accused Name</label>
                    <input type="text" class="form-control" placeholder="Enter Accused Name" id="a_name" name="a_name[]" value="<?=$r->a_name?>"></div>
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Father's/Husband Name</label><input type="text" class="form-control" placeholder="Enter Father's/Husband Name" id="a_fathersname" name="a_fathersname[]" value="<?=$r->a_fathersname?>"></div>
                    <div class="col-12 col-md-5">
                    <label class="m-t-20">Address</label>
                    <textarea class="form-control" placeholder="Enter Address" rows="5" id="a_address" name="a_address[]"><?=$r->a_address?></textarea>
                    </div>
                    <div class="col-12 col-md-1">
                    <label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="row<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                    </div>
                    </div>        
                    </div>        
                 <?php $i++;}?>   
            </div>
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>

            </div>  
            </div> 

            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Arrest Details</h4>            
                <button type="button" name="addarrest" id="addarrest" class="btn waves-effect waves-light btn-success">Add Arrest</button>
            
            <form action="<?=base_url('Cases/saveArrest')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="arr_cid" id="arr_cid" />          

            <div id="dynamic_field2" style="width:100%;">      
            <?php $i=1;foreach($arrested as $r){?>                           
                    <div id="arrest<?=$i?>" class="row">
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="arr_name" name="arr_name[]" value="<?=$r->a_name?>"></div>
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Father's/Husband Name</label>
                    <input type="text" class="form-control" placeholder="Enter Father's/Husband Name" id="arr_fathersname" name="arr_fathersname[]" value="<?=$r->a_fathersname?>"></div>
                    <div class="col-12 col-md-6"><label class="m-t-20">Address</label>                    
                    <textarea class="form-control" placeholder="Enter Address" rows="5" id="arr_address" name="arr_address[]"><?=$r->a_address?></textarea>
                    </div>
                    <div class="col-12 col-md-3"><label class="m-t-20">Arrest Date</label><input type="text" class="arr_date form-control" placeholder="Enter Date" id="arr_date" name="arr_date[]" value="<?=date('d-M-Y',strtotime($r->a_date))?>"></div>
                    <div class="col-12 col-md-3"><label class="m-t-20">Arrest Time</label><input type="text" class="form-control" placeholder="Enter Time" id="arr_time" name="arr_time[]" value="<?=date('H:i',strtotime($r->a_time))?>"></div>
                    <div class="col-12 col-md-5"><label class="m-t-20">Status</label><select class="select2 form-control custom-select" style="width: 100%; height:36px;" id="arr_status" name="arr_status[]"><option value="">Select</option><option value="Bail" <?=$r->a_status=='Bail'?'selected':'';?>>Bail</option><option value="PC" <?=$r->a_status=='PC'?'selected':'';?>>PC</option><option value="JC" <?=$r->a_status=='JC'?'selected':'';?>>JC</option></select></div>
                    <div class="col-12 col-md-1"><label class="m-t-20">Remove</label><button type="button" name="remove" id="arrest<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button></div></div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>


            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Notice U/S 41A CRPC Details</h4>            
                <button type="button" name="addcrpc41" id="addcrpc41" class="btn waves-effect waves-light btn-success">Add Details</button>
            
            <form action="<?=base_url('Cases/save41crpcdtls')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="n41a_cid" id="n41a_cid" />          

            <div id="dynamic_field3" style="width:100%;">      
                <?php $i=1;foreach($n41acrpc as $r){?>
                    <div id="crpc41<?=$i?>" class="row">
                    <div class="col-12 col-md-2"><label class="m-t-20">Date</label><input type="text" class="arr_date form-control" placeholder="Enter Date" id="n41a_date" name="n41a_date[]" value="<?=date('d-M-Y',strtotime($r->n41A_date))?>"></div>
                    <div class="col-12 col-md-3"><label class="m-t-20">Name</label><input type="text" class="form-control" placeholder="Enter Name" id="n41a_name" name="n41a_name[]" value="<?=$r->n41A_name?>"></div>
                    <div class="col-12 col-md-7"><label class="m-t-20">Address</label>
                    <textarea class="form-control" placeholder="Enter Address" rows="5" id="n41a_address" name="n41a_address[]"><?=$r->n41A_address?></textarea>
                    </div>                    
                    <div class="col-12 col-md-11"><label class="m-t-20">Compliance Detail</label>
                    <input type="text" class="form-control" placeholder="Enter Compliance Detail" id="n41a_complied" name="n41a_complied[]" value="<?=$r->n41A_complied?>">
                    </div>
                    <div class="col-12 col-md-1"><label class="m-t-20">Remove</label><button type="button" name="remove" id="crpc41<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button></div></div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>

            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Seizure of Articles</h4>            
                <button type="button" name="addsoa" id="addsoa" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/saveSoa')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="soa_cid" id="n41a_cid" />          

            <div id="dynamic_field4" style="width:100%;">      
                <?php $i=1;foreach($soa as $r){?>
                    <div id="soa<?=$i?>" class="row">
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="soa_name" name="soa_name[]" value="<?=$r->soa_name?>"></div>
                    <div class="col-12 col-md-8">
                    <label class="m-t-20">Description</label>
                    <textarea class="form-control" placeholder="Enter Status" rows="5" id="soa_desc" name="soa_desc[]"><?=$r->soa_desc?></textarea>
                    </div>
                    <div class="col-12 col-md-1">
                    <label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="soa<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                    </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>

            <!-- Seizure of Documents -->        
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Seizure of Documents</h4>            
                <button type="button" name="addsod" id="addsod" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/saveSod')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="sod_cid" id="sod_cid" />          

            <div id="dynamic_field5" style="width:100%;">      
                <?php $i=1;foreach($sod as $r){?>
                    <div id="sod<?=$i?>" class="row">
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="sod_name" name="sod_name[]" value="<?=$r->sod_name?>">
                    </div>
                    <div class="col-12 col-md-8">
                    <label class="m-t-20">Description</label>
                    <textarea class="form-control" placeholder="Enter Status" rows="5" id="sod_desc" name="sod_desc[]"><?=$r->sod_desc?></textarea>
                    </div>
                    <div class="col-12 col-md-1">
                    <label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="sod<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                    </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- Seizure of Documents -->   

            <!-- TIP -->        
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">TIP</h4>            
                <button type="button" name="addtip" id="addtip" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/saveTIP')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="tip_cid" id="sod_cid" />          

            <div id="dynamic_field6" style="width:100%;">      
                <?php $i=1;foreach($tip as $r){?>
                    <div id="tip<?=$i?>" class="row">
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Date</label>
                    <input type="text" class="arr_date form-control" placeholder="Enter Date" id="tip_date" name="tip_date[]" value="<?=date('d-M-Y',strtotime($r->tip_date))?>"></div>
                    <div class="col-12 col-md-6">
                    <label class="m-t-20">Status</label>
                    <input type="text" class="form-control" placeholder="Enter Status" id="tip_status" name="tip_status[]" value="<?=$r->tip_status?>"></div>
                    <div class="col-12 col-md-2">
                    <label class="m-t-20">Court Name</label>
                    <input type="text" class="form-control" placeholder="Enter Court Name" id="tip_court" name="tip_court[]" value="<?=$r->tip_court?>"></div>
                    <div class="col-12 col-md-1"><label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="tip<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                    </div></div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- TIP -->      

            <!-- crpc 160 -->

            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Notice U/S 160 of CRPC</h4>            
                <button type="button" name="addcrpc160" id="addcrpc160" class="btn waves-effect waves-light btn-success">Add Details</button>
            
            <form action="<?=base_url('Cases/save160crpcdtls')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="n160_cid" id="n160_cid" />          

            <div id="dynamic_field7" style="width:100%;">      
                <?php $i=1;foreach($n160crpc as $r){?>
                    <div id="crpc160<?=$i?>" class="row">
                    <div class="col-12 col-md-2">
                    <label class="m-t-20">Date</label>
                    <input type="text" class="arr_date form-control" placeholder="Enter Date" id="n160_date" name="n160_date[]" value="<?=date('d-M-Y',strtotime($r->n160_date))?>"></div>
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="n160_name" name="n160_name[]" value="<?=$r->n160_name?>"></div>
                    <div class="col-12 col-md-6">
                    <label class="m-t-20">Address</label>
                    <textarea class="form-control" placeholder="Enter Status" rows="5" id="n16_address" name="n160_address[]"><?=$r->n160_address?></textarea>                    
                    </div>
                    <div class="col-12 col-md-1">
                    <label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="crpc160<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                    </div></div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>

            <!-- crpc 160 -->

            <!-- crpc 161 -->

            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Examination and recording of statement of witness(s) U/S 161 of CRPC</h4>            
                <button type="button" name="addcrpc161" id="addcrpc161" class="btn waves-effect waves-light btn-success">Add Details</button>
            
            <form action="<?=base_url('Cases/save161crpcdtls')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="n161_cid" id="n161_cid" />          

            <div id="dynamic_field8" style="width:100%;">      
                <?php $i=1;foreach($n161crpc as $r){?>
                    <div id="crpc161<?=$i?>" class="row">
                    <div class="col-12 col-md-2">
                    <label class="m-t-20">Date</label>
                    <input type="text" class="arr_date form-control" placeholder="Enter Date" id="n161_date" name="n161_date[]" value="<?=date('d-M-Y',strtotime($r->n161_date))?>"></div>
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="n161_name" name="n161_name[]" value="<?=$r->n161_name?>"></div>
                    <div class="col-12 col-md-6">
                    <label class="m-t-20">Description</label>
                    <textarea class="form-control" placeholder="Enter Status" rows="5" id="n161_desc" name="n161_desc[]"><?=$r->n161_desc?></textarea>
                    </div>
                    <div class="col-12 col-md-1"><label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="crpc161<?=$i?>" class="btn btn-sm btn-danger btn_remove">Remove</button>
                    </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- crpc 161 -->


             <!-- Medical Exam -->        
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Medical Examination of victim and accused in a case of rape</h4>            
                <button type="button" name="addmeexam" id="addmeexam" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/saveMedicalExam')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="me_cid" id="me_cid" />          

            <div id="dynamic_field9" style="width:100%;">      
                <?php $i=1;foreach($medical as $r){?>
                    <div id="meexam<?=$i?>" class="row">
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Date</label>
                    <input type="text" class="arr_date form-control" placeholder="Enter Date" id="me_date" name="me_date[]" value="<?=date('d-M-Y',strtotime($r->me_date))?>">
                    </div>
                    <div class="col-12 col-md-8">
                    <label class="m-t-20">Status</label>
                    <textarea class="form-control" placeholder="Enter Status" rows="5" id="me_desc" name="me_desc[]"><?=$r->me_desc?></textarea>                    
                    </div>
                    <div class="col-12 col-md-1"><label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="meexam<?=$i?>" class="btn btn-sm btn-danger btn_remove">Remove</button>
                    </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- Medical Exam -->        

            <!-- crpc 164 accused -->

            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Recording Of Statement of accused(s) of U/S 164 of CRPC</h4>            
                <button type="button" name="addcrpc164_accused" id="addcrpc164_accused" class="btn waves-effect waves-light btn-success">Add Details</button>
            
            <form action="<?=base_url('Cases/save164crpc_accuseddtls')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="n164_cid" id="n164_cid" />          

            <div id="dynamic_field10" style="width:100%;">      
                <?php $i=1;foreach($n164crpc_accused as $r){?>
                    <div id="crpc164_accused<?=$i?>" class="row">
                        <div class="col-12 col-md-2">
                        <label class="m-t-20">Date</label>
                        <input type="text" class="arr_date form-control" placeholder="Enter Date" id="n164_date" name="n164_date[]" value="<?=date('d-M-Y',strtotime($r->n164_date))?>">
                        </div>
                        <div class="col-12 col-md-3">
                        <label class="m-t-20">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="n164_name" name="n164_name[]" value="<?=$r->n164_name?>">
                        </div>
                        <div class="col-12 col-md-6">
                        <label class="m-t-20">Description</label>
                        <textarea class="form-control" placeholder="Enter Description" rows="5" id="n164_desc" name="n164_desc[]"><?=$r->n164_desc?></textarea>
                        </div>
                        <div class="col-12 col-md-1">
                        <label class="m-t-20">Remove</label>
                        <button type="button" name="remove" id="crpc164_accused<?=$i?>" class="btn btn-sm btn-danger btn_remove">Remove</button>
                        </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- crpc 164 accused-->


            <!-- crpc 164 witness -->
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Recording Of Statement of witness(s) of U/S 164 of CRPC</h4>            
                <button type="button" name="addcrpc164_witness" id="addcrpc164_witness" class="btn waves-effect waves-light btn-success">Add Details</button>
            
            <form action="<?=base_url('Cases/save164crpc_witnessdtls')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="n164_cid" id="n164_cid" />          

            <div id="dynamic_field11" style="width:100%;">      
                <?php $i=1;foreach($n164crpc_witness as $r){?>
                    <div id="crpc164_witness<?=$i?>" class="row">
                    <div class="col-12 col-md-2">
                    <label class="m-t-20">Date</label>
                    <input type="text" class="arr_date form-control" placeholder="Enter Date" id="n164_date" name="n164_date[]" value="<?=date('d-M-Y',strtotime($r->n164_date))?>">
                    </div>
                    <div class="col-12 col-md-3">
                    <label class="m-t-20">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="n164_name" name="n164_name[]" value="<?=$r->n164_name?>">
                    </div>
                    <div class="col-12 col-md-6">
                    <label class="m-t-20">Description</label>
                    <textarea class="form-control" placeholder="Enter Description" rows="5" id="n164_desc" name="n164_desc[]"><?=$r->n164_desc?></textarea>                    
                    </div>
                    <div class="col-12 col-md-1">
                    <label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="crpc164_witness<?=$i?>" class="btn btn-sm btn-danger btn_remove">Remove</button>
                    </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- crpc 164 witness-->

            <!-- 27 ie act --> 
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Recovery of Articles pursuing to the statement of custody accused(s) U/S 27 I.E. act</h4>            
                <button type="button" name="addie27" id="addie27" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/saveie27')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="ie27_cid" id="ie27_cid" />          

            <div id="dynamic_field12" style="width:100%;">      
                <?php $i=1;foreach($ie27 as $r){?>
                    <div id="ie27<?=$i?>" class="row">
                    <div class="col-12 col-md-11">
                    <label class="m-t-20">Description</label>
                    <textarea class="form-control" placeholder="Enter Description" rows="5" id="ie27_desc" name="ie27_desc[]"><?=$r->ie27_desc?></textarea>
                    </div>
                    <div class="col-12 col-md-1">
                    <label class="m-t-20">Remove</label>
                    <button type="button" name="remove" id="ie27<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                    </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- 27 ie act --> 

            <!-- 32 ie act -->   
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Recording Of U/S 32 of I.E. act</h4>            
                <button type="button" name="addie32" id="addie32" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/saveie32')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="ie32_cid" id="ie32_cid" />          

            <div id="dynamic_field13" style="width:100%;">      
                <?php $i=1;foreach($ie32 as $r){?>
                    <div id="ie32<?=$i?>" class="row">
                        <div class="col-12 col-md-11">
                            <label class="m-t-20">Description</label>
                            <textarea class="form-control" placeholder="Enter Description" rows="5" id="ie32_desc" name="ie32_desc[]"><?=$r->ie32_desc?></textarea>
                        </div>
                        <div class="col-12 col-md-1">
                            <label class="m-t-20">Remove</label>
                            <button type="button" name="remove" id="ie32<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                        </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- 32 ie act --> 


            <!-- sending exhibit -->
            <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Sending the exhibits to SFSL/CFSL/FBP/QDEB</h4>            
                <button type="button" name="sendexhibit" id="sendexhibit" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/savesendexhibit')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="el_cid" id="el_cid" />          

            <div id="dynamic_field14" style="width:100%;">      
                <?php $i=1;foreach($el as $r){?>
                    <div id="el<?=$i?>" class="row">
                        <div class="col-12 col-md-11">
                            <label class="m-t-20">Description</label>                            
                            <textarea class="form-control" placeholder="Enter Description" rows="5" id="el_desc" name="el_desc[]"><?=$r->el_desc?></textarea>
                        </div>
                        <div class="col-12 col-md-1">
                            <label class="m-t-20">Remove</label>
                            <button type="button" name="remove" id="el<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                        </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- sending exhibit -->


        <!-- PO visit -->
        <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">PO visit by expert i.e. Planmaker/photographer/foot & fingerprint expert/MFU</h4>            
                <button type="button" name="addpvd" id="addpvd" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/savepovisit')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="pvd_cid" id="pvd_cid" />          

            <div id="dynamic_field15" style="width:100%;">      
                <?php $i=1;foreach($pvd as $r){?>
                    <div id="pvd<?=$i?>" class="row">
                        <div class="col-12 col-md-2">
                            <label class="m-t-20">Date</label>
                            <input type="text" class="arr_date form-control" placeholder="Enter Date" id="pvd_date" name="pvd_date[]" value="<?=date('d-M-Y',strtotime($r->pvd_date))?>">
                        </div>
                        <div class="col-12 col-md-9">
                            <label class="m-t-20">Description</label>
                            <textarea class="form-control" placeholder="Enter Description" rows="5" id="pr_desc" name="pvd_desc[]"><?=$r->pvd_desc?></textarea>
                        </div>
                        <div class="col-12 col-md-1">
                            <label class="m-t-20">Remove</label>
                            <button type="button" name="remove" id="pvd<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                        </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- PO visit -->

        <!-- pm report -->
        <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Final opinion of Autopsy surgeon/Doctor(s) in case of rape/POCSO cases etc</h4>            
                <button type="button" name="addpm" id="addpm" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/savepmreport')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="pr_cid" id="pvd_cid" />          

            <div id="dynamic_field16" style="width:100%;">      
                <?php $i=1;foreach($pmreport as $r){?>
                    <div id="pm<?=$i?>" class="row">
                        <div class="col-12 col-md-2">
                        <label class="m-t-20">Date</label>
                        <input type="text" class="arr_date form-control" placeholder="Enter Date" id="pr_date" name="pr_date[]" value="<?=date('d-M-Y',strtotime($r->pr_date))?>">
                        </div>
                        <div class="col-12 col-md-3">
                        <label class="m-t-20">Doctor Name</label>
                        <input type="text" class="form-control" placeholder="Enter Doctor Name" id="pr_doc_name" name="pr_doc_name[]" value="<?=$r->pr_doc_name?>">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="m-t-20">Details</label>
                            <textarea class="form-control" placeholder="Enter Details" rows="5" id="pr_desc" name="pr_desc[]"><?=$r->pr_desc?></textarea>
                        </div>
                        <div class="col-12 col-md-1">
                            <label class="m-t-20">Remove</label>
                            <button type="button" name="remove" id="pm<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                        </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- pm report -->


        <!-- final report -->
        <div class="card" id="myform">
            <div class="card-body">
            <h4 class="card-title">Date of final report CS/MF/True etc. and intimation to the Complainant</h4>            
                <button type="button" name="addfinalreport" id="addfinalreport" class="btn waves-effect waves-light btn-success">Add Details</button>            
            <form action="<?=base_url('Cases/savefinalreport')?>" method="post"> 
            <!-- CRSF -->
            <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

            <input type="hidden" value=<?=$cases[0]->c_id?> name="fr_cid" id="fr_cid" />          

            <div id="dynamic_field17" style="width:100%;">      
                <?php $i=1;foreach($finalreport as $r){?>
                    <div id="pm<?=$i?>" class="row">
                        <div class="col-12 col-md-3">
                        <label class="m-t-20">Date</label>
                        <input type="text" class="arr_date form-control" placeholder="Enter Date" id="fr_date" name="fr_date[]" value="<?=date('d-M-Y',strtotime($r->fr_date))?>">
                        </div>
                        <div class="col-12 col-md-3">
                        <label class="m-t-20">Report Name</label>
                        <input type="text" class="form-control" placeholder="Enter Report Name" id="fr_type" name="fr_type[]" value="<?=$r->fr_type?>">
                        </div>
                        <div class="col-12 col-md-5">
                            <label class="m-t-20">Details</label>
                            <textarea class="form-control" placeholder="Enter Details" rows="5" id="fr_desc" name="fr_desc[]"><?=$r->fr_desc?></textarea>                            
                        </div>
                        <div class="col-12 col-md-1">
                            <label class="m-t-20">Remove</label>
                            <button type="button" name="remove" id="pm<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                        </div>
                    </div>
                <?php $i++;}?>                         
            </div>  
            <br/>
            <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
            </form>                                        
            
            </div>  
            </div>
            <!-- final report -->

            <!-- final report -->
            <div class="card" id="myform">
                <div class="card-body">
                <h4 class="card-title">What's next course proposed</h4>            
                    <button type="button" name="addnextcourse" id="addnextcourse" class="btn waves-effect waves-light btn-success">Add Details</button>            
                <form action="<?=base_url('Cases/savenextcourse')?>" method="post"> 
                <!-- CRSF -->
                <?php 
                            $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <!-- CRSF -->

                <input type="hidden" value=<?=$cases[0]->c_id?> name="ncp_cid" id="ncp_cid" />          

                <div id="dynamic_field18" style="width:100%;">      
                    <?php $i=1;foreach($nextcourse as $r){?>
                        <div id="ncp<?=$i?>" class="row">                        
                            <div class="col-12 col-md-11">
                                <label class="m-t-20">Details</label>                                
                                <textarea class="form-control" placeholder="Enter Details" rows="5" id="ncp_desc" name="ncp_desc[]"><?=$r->ncp_desc?></textarea>
                            </div>
                            <div class="col-12 col-md-1">
                                <label class="m-t-20">Remove</label>
                                <button type="button" name="remove" id="ncp<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                            </div>
                        </div>
                    <?php $i++;}?>                         
                </div>  
                <br/>
                <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
                </form>                                        
                
                </div>  
            </div>
            <!-- final report -->

            <!-- Court Jugdement -->
            <div class="card" id="myform">
                <div class="card-body">
                <h4 class="card-title">Court Jugdement Details</h4>            
                    <button type="button" name="addcj" id="addcj" class="btn waves-effect waves-light btn-success">Add Details</button>            
                <form action="<?=base_url('Cases/savecj')?>" method="post"> 
                <!-- CRSF -->
                <?php 
                            $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <!-- CRSF -->

                <input type="hidden" value=<?=$cases[0]->c_id?> name="cj_cid" id="cj_cid" />          

                <div id="dynamic_field19" style="width:100%;">      
                    <?php $i=1;foreach($cj as $r){?>
                        <div id="cj<?=$i?>" class="row">                        
                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Court Name</label>
                                <input type="text" class="form-control" placeholder="Enter Court Name" id="cj_courtname" name="cj_courtname[]" value="<?=$r->cj_courtname?>">
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Justice Name</label>
                                <input type="text" class="form-control" placeholder="Enter Justice Name" id="cj_justicename" name="cj_justicename[]" value="<?=$r->cj_justicename?>">
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Court No</label>
                                <input type="text" class="form-control" placeholder="Enter Court No" id="cj_courtno" name="cj_courtno[]" value="<?=$r->cj_courtno?>">
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Case No</label>
                                <input type="text" class="form-control" placeholder="Enter Case No" id="cj_caseno" name="cj_caseno[]" value="<?=$r->cj_caseno?>">
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Petition Date</label>
                                <input type="text" class="arr_date form-control" placeholder="Enter Court No" id="cj_petition_date" name="cj_petition_date[]" value="<?=date('d-M-Y',strtotime($r->cj_petition_date))?>">
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Hearing Date</label>
                                <input type="text" class="arr_date form-control" placeholder="Enter Hearing Date" id="cj_hearing_date" name="cj_hearing_date[]" value="<?=date('d-M-Y',strtotime($r->cj_hearing_date))?>">
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="m-t-20">State Representative</label>
                                <input type="text" class="form-control" placeholder="Enter State Representative" id="cj_staterep" name="cj_staterep[]" value="<?=$r->cj_staterep?>">
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Status</label>                                
                                <textarea class="form-control" placeholder="Enter Status" rows="5" id="cj_status" name="cj_status[]"><?=$r->cj_status?></textarea>
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="m-t-20">Special Remarks</label>                                
                                <textarea class="form-control" placeholder="Enter Special Remarks" rows="5" id="cj_special_remarks" name="cj_special_remarks[]"><?=$r->cj_special_remarks?></textarea>
                            </div>

                            <!--
                                `cj_cid`, `cj_courtname`, `cj_justicename`, `cj_courtno`, `cj_caseno`, 
                                `cj_petition_date`, `cj_hearing_date`, `cj_staterep`, `cj_status`, 
                                `cj_special_remarks`, `cj_datetime`, `cj_flag`, `cj_userid`
                            -->

                            <div class="col-12 col-md-1">
                                <label class="m-t-20">Remove</label>
                                <button type="button" name="remove" id="cj<?=$i?>" class="btn btn-danger btn-sm btn_remove">Remove</button>
                            </div>
                        </div>
                    <?php $i++;}?>                         
                </div>  
                <br/>
                <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>  
                </form>                                        
                
                </div>  
            </div>
            <!-- Court Jugdement -->

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<script>

    
</script>    
