
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">All Cases</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">All Cases</li>
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
            <?php $this->load->view('template/message');?>	
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Welcome back  -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="table">
                            <div class="card-body" id="table-body">
                            <div class="table-responsive">
                                                <table id="file_export" class="table table-bordered" >
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No.</th>
                                                            <th>Action</th>  
                                                            <th>Case Date</th>
                                                            <th>PS</th>
                                                            <th>Case Ref</th>
                                                            <th>Under Section</th>
                                                            <!--<th>Brief Fact</th>-->
                                                            <th>Complainant</th>
                                                            <th>Complainant Address</th>                                                            
                                                            <th>Complainant Mobile No</th> 
                                                            <th>Accused</th> 
                                                            <th>Arrested</th> 
                                                            <th>Notice U/S 41A of CRPC</th> 
                                                            <th>Seizure Of Articles</th> 
                                                            <th>Seizure Of Documents</th> 
                                                            <th>TIP</th>                                                          
                                                            <th>Notice U/S 160 of CRPC</th> 
                                                            <th>Examination and recording of statement of witness(s) U/S 161 of CRPC</th> 
                                                            <th>Medical Examination of victim and accused in a case of rape</th> 
                                                            <th>Recording Of Statement of accused(s) of U/S 164 of CRPC</th>                                                          
                                                            <th>Recording Of Statement of witness(s) U/S 164 of CRPC</th>   
                                                            <th>Recovery of Articles pursuing to the statement of custody accused(s) U/S 27 I.E. act</th>   
                                                            <th>Recording Of U/S 32 of I.E. act</th>                                                               
                                                            <th>Sending the exhibits to SFSL/CFSL/FBP/QDEB</th>                                                          
                                                            <th>PO visit by expert i.e. Planmaker/photographer/foot & fingerprint expert/MFU</th>                                                          
                                                            <th>Final opinion of Autopsy surgeon/Doctor(s) in case of rape/POCSO cases etc</th>                                                          
                                                            <th>Date of final report CS/MF/True etc. and intimation to the Complainant</th>                                                          
                                                            <th>What's next course proposed</th>                    
                                                            <th>Court Judgement</th>   
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                           
                                                    </tbody>       
                                                </table>       
                            </div>                            
                            </div>
                        </div>
                </div>
                
            </div>
         <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
<script>
$('#file_export').DataTable({   
    dom: 'Bfrtip',    
    order: [[ 1, "desc" ]],
    paging:true,  
    scrollY:false,     
    buttons: [
            { 
				extend: 'pdf', 
				text:'<i class="fa fa-file-pdf"></i> Pdf',
                className: 'btn btn-danger btn-sm btn-flat btn-raised',
                orientation: 'landscape',
                pageSize: 'LEGAL'				
			},
            { 
				extend: 'excel', 
				text:'<i class="far fa-file-excel"></i> Excel',
				className: 'btn btn-success btn-sm btn-flat btn-raised'				
			}
    ],  
    rowReorder: {
            selector: 'td:nth-child(2)'
        },
    responsive: true,     
    ajax: {
			type:'GET',
            url: '<?=base_url('Cases/getCasesById/'.$this->session->userdata('cid'))?>',								
	      }
});
$('.buttons-print, .buttons-excel').addClass('btn btn-primary mr-1');

/*
scrollY:"350px",
    scrollX:true,
    scrollCollapse: true,
    fixedColumns: true,
*/
</script>

