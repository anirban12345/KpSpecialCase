
<div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Create Cases</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Create Cases</li>
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
            <!--
            
            -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card" id="myform">
<form action="<?=base_url('Cases/saveCases')?>" method="post"> 

                        <!-- CRSF -->
                        <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

                      

                            <div class="card-body">
                                <h4 class="card-title">Entry Case Details</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <label class="m-t-20">Case Date</label>
                                        <input type="text" class="form-control" placeholder="Enter Case Date" id="c_date" name="c_date" value="<?=set_value('c_date')?>">                                        
                                        <?php echo form_error('c_date'); ?>
                                    </div>
                                    
                                    <?php if(in_array('allcase',$user_permission)){ ?>
                                    <div class="col-12">
                                        <label class="m-t-20">Case Initiated By</label>
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" id="c_ps" name="c_ps">
                                            <option value="select">Select</option>
                                            <?php foreach($ps as $r){ ?>
                                            <option value="<?=$r->ps_id?>"><?=$r->ps_name?></option>
                                            <?php } ?>   
                                        </select>    
                                    </div>
                                    <?php }?>

                                    <?php if(in_array('userlevelcase',$user_permission)){ ?>
                                    <div class="col-12">                                        
                                        <input type="hidden" class="form-control" placeholder="Enter Case Ref" id="c_ps" name="c_ps" value="<?=$this->session->userdata('userdtls')[0]->u_psid?>">                                        
                                    </div>
                                    <?php }?>

                                    <div class="col-12">
                                        <label class="m-t-20">Case Heading</label>
                                        <input type="text" class="form-control" placeholder="Enter Case Heading" id="c_head" name="c_head" value="<?=set_value('c_head')?>">                                        
                                        <?php echo form_error('c_head'); ?>
                                    </div>

                                    <div class="col-12">
                                        <label class="m-t-20">Case Ref</label>
                                        <input type="text" class="form-control" placeholder="Enter Case Ref" id="c_caseref" name="c_caseref" value="<?=set_value('c_caseref')?>">                                        
                                        <?php echo form_error('c_caseref'); ?>
                                    </div>

                                    <div class="col-12">
                                        <label class="m-t-20">Under Section</label>
                                        <input type="text" class="form-control" placeholder="Enter Under Section" id="c_undersection" name="c_undersection" value="<?=set_value('c_undersection')?>">                                        
                                        <?php echo form_error('c_undersection'); ?>        
                                    </div>

                                    <div class="col-12">
                                        <label class="m-t-20">Brief Fact</label>
                                        <textarea class="form-control" rows="5" placeholder="Enter Brief Fact" id="c_brieffact" name="c_brieffact"><?=set_value('c_brieffact')?></textarea>
                                    </div>
                                   
                                   
                                    <div class="col-12">
                                        <label class="m-t-20">Complainant</label>
                                        <input type="text" class="form-control" placeholder="Enter Complainant" id="c_complainant" name="c_complainant" value="<?=set_value('c_complainant')?>">                                        
                                        <?php echo form_error('c_complainant'); ?>
                                    </div>
                                    

                                    <div class="col-12">
                                        <label class="m-t-20">Complainant Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Complainant Address" id="c_complainant_address" name="c_complainant_address" value="<?=set_value('c_complainant_address')?>">                                        
                                        <?php echo form_error('c_complainant_address'); ?>
                                    </div>


                                    <div class="col-12">
                                        <label class="m-t-20">Complainant Mobile No</label>
                                        <input type="text" class="form-control" placeholder="Enter Complainant" id="c_complainant_mobileno" name="c_complainant_mobileno" value="<?=set_value('c_complainant_mobileno')?>">                                        
                                        <?php echo form_error('c_complainant_mobileno'); ?>
                                    </div>

                                </div>                         
                            </div>
                            <div class="card-footer">
                             <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>
                            </div>
</form>
                        </div>
                    </div>
                </div>
            </div>
         <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->


<script>
    $('.select2').select2();

    // MAterial Date picker    
    $('#c_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });
</script>    
