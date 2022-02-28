<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Create User Group</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">User Group</a>
                                    </li> 
                                    <li class="breadcrumb-item active" aria-current="page">Create User Group</li>                                   
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

                <!-- ============================================================== -->
                <!-- Welcome back  -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <div class="col-12 col-sm-12">
                    <div class="card" id="myform">                    
                    <form action="<?=base_url('User_Group/saveUserGroup')?>" method="post"> 
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
                                <h4 class="card-title">User Group Details</h4>
                                    
                                <label class="m-t-20">User Group Name</label>
                                <input type="text" class="form-control" placeholder="Enter User Group Name" id="ug_name" name="ug_name" value="<?=set_value('ug_name')?>" autocomplete="off" />                                                                                
                                <?php echo form_error('ug_name'); ?>
                            </div>
                            <div class="card-body">
                            
                            <h4 class="card-title">User Permissions</h4>   

                            <table class="table table-bordered"> 

                            <thead>
                            <th>
                            <td>
                            Title
                            </td>
                            <td>                            
                            </td>
                            <td>                            
                            </td>
                            </th>
                            </thead>
                            <tbody>   
                            <tr>
                            <td>
                            </td>

                            <td>
                            <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="allcase" value="allcase" name="ug_permission[]" />
                                        <label class="custom-control-label" for="allcase">All Cases</label>
                                    </div>
                            </div>
                            </td>
                            <td>
                            <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="userlevelcase" value="userlevelcase" name="ug_permission[]" />
                                        <label class="custom-control-label" for="userlevelcase">User level Cases</label>
                                    </div>
                            </div>
                            </td>
                           
                            </tr>

                            <tr>
                            <td>
                            </td>
                            <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="createcase" name="ug_permission[]" value="createcase" />
                                <label class="custom-control-label m-t-20" for="createcase">Create Case</label>
                            </div> 
                            </td>
                            <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="updatecase" name="ug_permission[]" value="updatecase" />
                                <label class="custom-control-label m-t-20" for="updatecase">Update Case</label>
                            </div> 
                            </td>
                            <td> 
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="viewcase" name="ug_permission[]" value="viewcase" />
                                <label class="custom-control-label m-t-20" for="viewcase">View Case</label>
                            </div>    
                            </td>                                
                            </tr>
                            </tbody>   
                            </table>
                           
                           

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="createcaseinstraction" name="ug_permission[]" value="createcaseinstraction" />
                                <label class="custom-control-label m-t-20" for="createcaseinstraction">Create Case Instruction</label>
                            </div> 

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="viewcaseinstraction" name="ug_permission[]" value="viewcaseinstraction" />
                                <label class="custom-control-label m-t-20" for="viewcaseinstraction">View Case Instruction</label>
                            </div> 

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="createusers" name="ug_permission[]" value="createusers" />
                                <label class="custom-control-label m-t-20" for="createusers">Create Users</label>
                            </div> 

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="updateusers" name="ug_permission[]" value="updateusers" />
                                <label class="custom-control-label m-t-20" for="updateusers">Update Users</label>
                            </div> 
                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="createusergroup" name="ug_permission[]" value="createusergroup" />
                                <label class="custom-control-label m-t-20" for="createusergroup">Create User Group</label>
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
</script>