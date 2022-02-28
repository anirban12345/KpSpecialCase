/****************************************** */
    /****************************************** */

    var i=1;  
    $('#add').click(function(){  
           i++;  
           str='<div id="row'+i+'" class="row">'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Accused Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Accused Name" id="a_name" name="a_name[]" value=""></div>'+
               '<div class="col-12 col-md-3"><label class="m-t-20">Father\'s/Husband Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Father\'s/Husband Name" id="a_fathersname" name="a_fathersname[]" value=""></div>'+
               '<div class="col-12 col-md-5">'+
               '<label class="m-t-20">Address</label>'+
               '<textarea class="form-control" placeholder="Enter Address" rows="5" id="a_address" name="a_address[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="row'+i+'" class="btn btn-sm btn-danger  btn_remove">Remove</button>'+
               '</div></div>';
           $('#dynamic_field').append(str);  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


    var i=1;  
    $('#addarrest').click(function(){  
           i++;  
           str='<div id="arrest'+i+'" class="row">'+
               '<div class="col-12 col-md-3">'+
                    '<label class="m-t-20">Name</label>'+
                    '<input type="text" class="form-control" placeholder="Enter Name" id="arr_name" name="arr_name[]" value=""></div>'+
               '<div class="col-12 col-md-3">'+
                    '<label class="m-t-20">Father\'s/Husband Name</label>'+
                    '<input type="text" class="form-control" placeholder="Enter Father\'s/Husband Name" id="arr_fathersname" name="arr_fathersname[]" value=""></div>'+
               '<div class="col-12 col-md-6">'+
                    '<label class="m-t-20">Address</label>'+                    
                    '<textarea class="form-control" placeholder="Enter Address" rows="5" id="arr_address" name="arr_address[]"></textarea></div>'+
               '<div class="col-12 col-md-3">'+
                    '<label class="m-t-20">Arrest Date</label>'+
                    '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="arr_date" name="arr_date[]" value=""></div>'+
               '<div class="col-12 col-md-3">'+
                    '<label class="m-t-20">Arrest Time</label>'+
                    '<input type="text" class="form-control" placeholder="Enter Time" id="arr_time" name="arr_time[]" value=""></div>'+
               '<div class="col-12 col-md-5">'+
                    '<label class="m-t-20">Status</label>'+
                    '<select class="select2 form-control custom-select" style="width: 100%; height:36px;" id="arr_status" name="arr_status[]"><option value="">Select</option><option value="Bail">Bail</option><option value="PC">PC</option><option value="JC">JC</option></select></div>'+
               '<div class="col-12 col-md-1">'+
                    '<label class="m-t-20">Remove</label>'+
                    '<button type="button" name="remove" id="arrest'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
               '</div></div>';
           
           $('#dynamic_field2').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });

      });

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
      
/*41A*/
    var i=1;  
    $('#addcrpc41').click(function(){  
           i++; 
           str='<div id="crpc41'+i+'" class="row">'+
               '<div class="col-12 col-md-2">'+
               '<label class="m-t-20">Date</label>'+
               '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="n41a_date" name="n41a_date[]" value=""></div>'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Name" id="n41a_name" name="n41a_name[]" value=""></div>'+
               '<div class="col-12 col-md-7"><label class="m-t-20">Address</label>'+               
               '<textarea class="form-control" placeholder="Enter Address" rows="5" id="n41a_address" name="n41a_address[]"></textarea></div>'+
               '<div class="col-12 col-md-11"><label class="m-t-20">Compliance Detail</label>'+
                    '<input type="text" class="form-control" placeholder="Enter Compliance Detail" id="n41a_complied" name="n41a_complied[]" value="">'+
               '</div>'+               

               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="crpc41'+i+'" class="btn btn-sm btn-danger btn_remove">Remove</button>'+
               '</div></div>'; 
           $('#dynamic_field3').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
/*41A*/

    /*Seizure of Articles*/
      var i=1;  
    $('#addsoa').click(function(){  
           i++;  
           str='<div id="soa'+i+'" class="row">'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Name" id="soa_name" name="soa_name[]" value=""></div>'+
               '<div class="col-12 col-md-8"><label class="m-t-20">Description</label>'+
               '<textarea class="form-control" placeholder="Enter Description" rows="5" id="soa_desc" name="soa_desc[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label><button type="button" name="remove" id="soa'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
               '</div></div>';
           $('#dynamic_field4').append(str);  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
    /*Seizure of Articles*/

      /*Seizure of Documents*/
      var i=1;  
      $('#addsod').click(function(){  
           i++; 
           str='<div id="sod'+i+'" class="row">'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Name" id="sod_name" name="sod_name[]" value="">'+
               '</div>'+
               '<div class="col-12 col-md-8">'+
               '<label class="m-t-20">Description</label>'+
               '<textarea class="form-control" placeholder="Enter Description" rows="5" id="sod_desc" name="sod_desc[]"></textarea>'+
               '</div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="sod'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
               '</div></div>'; 
           $('#dynamic_field5').append(str);  

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
      /*Seizure of Documents*/

    /*TIP*/
    var i=1;  
      $('#addtip').click(function(){  
           i++;  
           str='<div id="tip'+i+'" class="row">'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Date</label>'+
               '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="tip_date" name="tip_date[]" value=""></div>'+
               '<div class="col-12 col-md-6">'+
               '<label class="m-t-20">Status</label>'+
               '<input type="text" class="form-control" placeholder="Enter Status" id="tip_status" name="tip_status[]" value="">'+
               '</div>'+
               '<div class="col-12 col-md-2">'+
               '<label class="m-t-20">Court Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Court Name" id="tip_court" name="tip_court[]" value=""></div>'+
               '<div class="col-12 col-md-1">'+
               '<label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="tip'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button></div>'+
               '</div>';
           $('#dynamic_field6').append(str);
           // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });
    
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
      /*TIP*/

/* crpc 160*/
var i=1;  
    $('#addcrpc160').click(function(){  
           i++;  
           str='<div id="crpc160'+i+'" class="row">'+
           '<div class="col-12 col-md-2">'+
           '<label class="m-t-20">Date</label>'+
           '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="n160_date" name="n160_date[]" value=""></div>'+
           '<div class="col-12 col-md-3"><label class="m-t-20">Name</label>'+
           '<input type="text" class="form-control" placeholder="Enter Name" id="n160_name" name="n160_name[]" value=""></div>'+
           '<div class="col-12 col-md-6"><label class="m-t-20">Address</label>'+
           '<textarea class="form-control" placeholder="Enter Address" rows="5" id="n160_address" name="n160_address[]"></textarea></div>'+
           '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
           '<button type="button" name="remove" id="crpc160'+i+'" class="btn btn-sm btn-danger btn_remove">Remove</button>'+
           '</div></div>';
           $('#dynamic_field7').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
/*crpc 160*/


/* crpc 161*/
var i=1;  
    $('#addcrpc161').click(function(){  
           i++; 
           str='<div id="crpc161'+i+'" class="row">'+
               '<div class="col-12 col-md-2">'+
               '<label class="m-t-20">Date</label>'+
               '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="n161_date" name="n161_date[]" value="">'+
               '</div>'+
               '<div class="col-12 col-md-3"><label class="m-t-20">Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Name" id="n161_name" name="n161_name[]" value=""></div>'+
               '<div class="col-12 col-md-6"><label class="m-t-20">Description</label>'+
               '<textarea class="form-control" placeholder="Enter Description" rows="5" id="n161_desc" name="n161_desc[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="crpc161'+i+'" class="btn btn-sm btn-danger btn_remove">Remove</button>'+
               '</div></div>'; 
           $('#dynamic_field8').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
/*crpc 161*/


    /*mecdical exam*/
    var i=1;  
      $('#addmeexam').click(function(){  
           i++; 
           str='<div id="meexam'+i+'" class="row">'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Date</label>'+
               '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="me_date" name="me_date[]" value="">'+
               '</div>'+
               '<div class="col-12 col-md-8">'+
               '<label class="m-t-20">Status</label>'+               
               '<textarea class="form-control" placeholder="Enter Status" rows="5" id="me_desc" name="me_desc[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="meexam'+i+'" class="btn btn-sm btn-danger btn_remove">Remove</button>'+
               '</div></div>'; 
           $('#dynamic_field9').append(str);  

           
        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
     /*mecdical exam*/



    /* crpc 164 accused*/
    var i=1;  
    $('#addcrpc164_accused').click(function(){  
           i++; 
           str='<div id="crpc164_accused'+i+'" class="row">'+
               '<div class="col-12 col-md-2">'+
               '<label class="m-t-20">Date</label>'+
               '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="n164_date" name="n164_date[]" value="">'+
               '</div>'+
               '<div class="col-12 col-md-3">'+
               '<label class="m-t-20">Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Name" id="n164_name" name="n164_name[]" value=""></div>'+
               '<div class="col-12 col-md-6"><label class="m-t-20">Description</label>'+               
               '<textarea class="form-control" placeholder="Enter Description" rows="5" id="n164_desc" name="n164_desc[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="crpc164_accused'+i+'" class="btn btn-sm btn-danger btn_remove">Remove</button>'+
               '</div></div>'; 
           $('#dynamic_field10').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
    /*crpc 164 accused*/


    /* crpc 164 witness*/
    var i=1;  
    $('#addcrpc164_witness').click(function(){  
           i++;  
           str='<div id="crpc164_witness'+i+'" class="row">'+
               '<div class="col-12 col-md-2">'+
               '<label class="m-t-20">Date</label>'+
               '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="n164_date" name="n164_date[]" value="">'+
               '</div>'+
               '<div class="col-12 col-md-3"><label class="m-t-20">Name</label>'+
               '<input type="text" class="form-control" placeholder="Enter Name" id="n164_name" name="n164_name[]" value=""></div>'+
               '<div class="col-12 col-md-6"><label class="m-t-20">Description</label>'+
               '<textarea class="form-control" placeholder="Enter Description" rows="5" id="n164_desc" name="n164_desc[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="crpc164_witness'+i+'" class="btn btn-sm btn-danger btn_remove">Remove</button>'+
               '</div></div>';

           $('#dynamic_field11').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
    /*crpc 164 accused*/
     

    /*ie27*/
    var i=1;  
      $('#addie27').click(function(){  
          i++; 
           str='<div id="jsie27'+i+'" class="row">'+
               '<div class="col-12 col-md-11">'+
               '<label class="m-t-20">Description</label>'+               
               '<textarea class="form-control" placeholder="Enter Description" rows="5" id="ie27_desc" name="ie27_desc[]"></textarea></div>'+
               '<div class="col-12 col-md-1"><label class="m-t-20">Remove</label>'+
               '<button type="button" name="remove" id="jsie27'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
               '</div></div>';
           $('#dynamic_field12').append(str);  
           
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
      /*ie27*/

    /*ie32*/
    var i=1;  
      $('#addie32').click(function(){  
           i++;            

           str='<div id="ie32'+i+'" class="row">'+
                    '<div class="col-12 col-md-11">'+
                        '<label class="m-t-20">Description</label>'+                        
                        '<textarea class="form-control" placeholder="Enter Description" rows="5" id="ie32_desc" name="ie32_desc[]"></textarea>'+
                    '</div>'+
                    '<div class="col-12 col-md-1">'+
                        '<label class="m-t-20">Remove</label>'+
                        '<button type="button" name="remove" id="ie32'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                    '</div>'+
                '</div>';                
           $('#dynamic_field13').append(str);  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
    /*ie32*/

    /*send exhibit*/
    var i=1;  
      $('#sendexhibit').click(function(){  
           i++;            
           str='<div id="sendexhibit'+i+'" class="row">'+
                    '<div class="col-12 col-md-11">'+
                        '<label class="m-t-20">Description</label>'+                        
                        '<textarea class="form-control" placeholder="Enter Description" rows="5" id="el_desc" name="el_desc[]"></textarea>'+
                    '</div>'+
                    '<div class="col-12 col-md-1">'+
                        '<label class="m-t-20">Remove</label>'+
                        '<button type="button" name="remove" id="sendexhibit'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                    '</div>'+
                '</div>';                
           $('#dynamic_field14').append(str);  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();  
      }); 
      /*send exhibit*/


      /*po details*/
    var i=1;  
    $('#addpvd').click(function(){  
         i++; 
         
         str='<div id="pvd'+i+'" class="row">'+
                   '<div class="col-12 col-md-2">'+
                      '<label class="m-t-20">Date</label>'+
                      '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="pvd_date" name="pvd_date[]" value="">'+
                  '</div>'+
                  '<div class="col-12 col-md-9">'+
                      '<label class="m-t-20">Description</label>'+                      
                      '<textarea class="form-control" placeholder="Enter Description" rows="5" id="pvd_desc" name="pvd_desc[]"></textarea>'+
                  '</div>'+
                  '<div class="col-12 col-md-1">'+
                      '<label class="m-t-20">Remove</label>'+
                      '<button type="button" name="remove" id="pvd'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                  '</div>'+
              '</div>';                
         $('#dynamic_field15').append(str);  

        // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });
    });  
    $(document).on('click', '.btn_remove', function(){  
         var button_id = $(this).attr("id");   
         $('#'+button_id+'').remove();  
    }); 
    /*po details*/



     /*pm report details*/
     var i=1;  
     $('#addpm').click(function(){  
          i++; 
          
          str='<div id="pvd'+i+'" class="row">'+
                   '<div class="col-12 col-md-2">'+
                        '<label class="m-t-20">Date</label>'+
                        '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="pr_date" name="pr_date[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-3">'+
                        '<label class="m-t-20">Doctor Name</label>'+
                        '<input type="text" class="form-control" placeholder="Enter Doctor Name" id="pr_doc_name" name="pr_doc_name[]" value="">'+
                    '</div>'+
                   '<div class="col-12 col-md-6">'+
                       '<label class="m-t-20">Details</label>'+                       
                       '<textarea class="form-control" placeholder="Enter Description" rows="5" id="pr_desc" name="pr_desc[]"></textarea>'+
                   '</div>'+
                   '<div class="col-12 col-md-1">'+
                       '<label class="m-t-20">Remove</label>'+
                       '<button type="button" name="remove" id="pvd'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                   '</div>'+
               '</div>';                
          $('#dynamic_field16').append(str);  

           // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });
          
     });  
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#'+button_id+'').remove();  
     }); 
     /*pm report details*/
 

     /*final report details*/
     var i=1;  
     $('#addfinalreport').click(function(){  
          i++; 
          
          str='<div id="finalreport'+i+'" class="row">'+
                   '<div class="col-12 col-md-3">'+
                        '<label class="m-t-20">Date</label>'+
                        '<input type="text" class="arr_date form-control" placeholder="Enter Date" id="fr_date" name="fr_date[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-3">'+
                        '<label class="m-t-20">Report Name</label>'+
                        '<input type="text" class="form-control" placeholder="Enter Report Name" id="fr_type" name="fr_type[]" value="">'+
                    '</div>'+
                   '<div class="col-12 col-md-5">'+
                       '<label class="m-t-20">Details</label>'+                       
                       '<textarea class="form-control" placeholder="Enter Description" rows="5" id="fr_desc" name="fr_desc[]"></textarea>'+
                   '</div>'+
                   '<div class="col-12 col-md-1">'+
                       '<label class="m-t-20">Remove</label>'+
                       '<button type="button" name="remove" id="finalreport'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                   '</div>'+
               '</div>';                
          $('#dynamic_field17').append(str);  

           // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });
          
     });  
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#'+button_id+'').remove();  
     }); 
     /*final report details*/


     /*next course proposed*/
     var i=1;  
     $('#addnextcourse').click(function(){  
          i++;           
          str='<div id="ncp'+i+'" class="row">'+                  
                   '<div class="col-12 col-md-11">'+
                       '<label class="m-t-20">Details</label>'+                       
                       '<textarea class="form-control" placeholder="Enter Details" rows="5" id="ncp_desc" name="ncp_desc[]"></textarea>'+
                   '</div>'+
                   '<div class="col-12 col-md-1">'+
                       '<label class="m-t-20">Remove</label>'+
                       '<button type="button" name="remove" id="ncp'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                   '</div>'+
               '</div>';                
          $('#dynamic_field18').append(str);  

           // MAterial Date picker    
        $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });
          
     });  
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#'+button_id+'').remove();  
     }); 
     /*next course proposed*/

     /*court judgement*/
     var i=1;  
     $('#addcj').click(function(){  
          i++;           
          str='<div id="cj'+i+'" class="row">'+                                         
                    '<div class="col-12 col-md-4">'+                    
                    '<label class="m-t-20">Court Name</label>'+
                    '<input type="text" class="form-control" placeholder="Enter Court Name" id="cj_courtname" name="cj_courtname[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Justice Name</label>'+
                         '<input type="text" class="form-control" placeholder="Enter Justice Name" id="cj_justicename" name="cj_justicename[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Court No</label>'+
                         '<input type="text" class="form-control" placeholder="Enter Court No" id="cj_courtno" name="cj_courtno[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Case No</label>'+
                         '<input type="text" class="form-control" placeholder="Enter Case No" id="cj_caseno" name="cj_caseno[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Petition Date</label>'+
                         '<input type="text" class="arr_date form-control" placeholder="Enter Court No" id="cj_petition_date" name="cj_petition_date[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Hearing Date</label>'+
                         '<input type="text" class="arr_date form-control" placeholder="Enter Hearing Date" id="cj_hearing_date" name="cj_hearing_date[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-3">'+
                         '<label class="m-t-20">State Representative</label>'+
                         '<input type="text" class="form-control" placeholder="Enter State Representative" id="cj_staterep" name="cj_staterep[]" value="">'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Status</label>'+                         
                         '<textarea class="form-control" placeholder="Enter Description" rows="5" id="cj_status" name="cj_status[]"></textarea>'+
                    '</div>'+
                    '<div class="col-12 col-md-4">'+
                         '<label class="m-t-20">Special Remarks</label>'+                         
                         '<textarea class="form-control" placeholder="Enter Description" rows="5" id="cj_special_remarks" name="cj_special_remarks[]"></textarea>'+
                    '</div>'+                                
                    '<div class="col-12 col-md-1">'+
                         '<label class="m-t-20">Remove</label>'+
                         '<button type="button" name="remove" id="cj'+i+'" class="btn btn-danger btn-sm btn_remove">Remove</button>'+
                    '</div>'+
               '</div>';                
          $('#dynamic_field19').append(str);  

          // MAterial Date picker    
          $('.arr_date').bootstrapMaterialDatePicker({ 
          weekStart: 0, 
          time: false,
          format: 'DD-MMMM-YYYY'
          });
          
     });  
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#'+button_id+'').remove();  
     }); 
     /*court judgement*/

      // MAterial Date picker    
$('.arr_date').bootstrapMaterialDatePicker({ 
    weekStart: 0, 
    time: false,
    format: 'DD-MMMM-YYYY'
    });