 @include('header')
<div class="row" style="
  margin-top: 82px;">
 <div class="col-md-12 ">
 
 				 <h3 class="panel-title text-uppercase text-bold text-rg heading-line-below heading-line-below-short ">   Create Role </h3>	
              <div class="panel panel-default" id="box1-delete">
              <div class="panel-body input_my">
              
              <form action="<?php// echo base_url('save-roles'); ?>" method="post" enctype="multipart/form-data">
      <div class="row">
     
         
            <div class=" col-md-6 mt-4">
               <label for="usr">Role Name <font style="color:red;">*</font></label>
               <input type="text" class="form-control fieldname" name="role_name"  value="" placeholder="Name" required="">
             
            </div>
             <div class=" col-md-6 mt-4 input_my"  id="container" >
                        <label for="stage_name"> Reporting To: </label>
                          <input type="hidden" name="reporting_to" id="reporting_to">
                        
                            <div id="treeparent">
                                      <div id="tree"></div>
                            </div>
       
       
        
                        
            </div> 
              
            <div class=" col-md-12 mt-4 input_my">
               <label for="usr"> Description  <font style="color:red;">*</font></label>
               <textarea   name="role_des" placeholder="Description"  class="form-control "  ></textarea>
            </div>


         <div class=" col-md-12 mt-4 input_my">    
      
 </div>
          
     
             
             
             
  <div class="col-md-12">
            <div class="Permission_box">
            
            <div class="row">
            
                    <div class="col-md-12">
                    <h5 class="mt-3"> Permission type </h5>
                    </div>
                  
                      <div class="col-md-2">
                      <div class="Permission_box_li">
                          <ul class="">
                                    <li class="active"><a data-toggle="tab" href="#Leads">Leads</a></li>
                                    <li><a data-toggle="tab" href="#crmSettings">CRM Settings</a></li>
                                    <li><a data-toggle="tab" href="#AddAccounts">Users</a></li>
                                    <li><a data-toggle="tab" href="#Settings">Roles Settings</a></li>
                                    <li><a data-toggle="tab" href="#Mailer">Mailer</a></li>
                                    <li><a data-toggle="tab" href="#Universal">Universal Filter</a></li>
                                </ul>
            		    	</div>
                      </div>
              <input type="hidden" id="add_permission" name="features_permission">
               <div class="col-md-10">
                  <div class="tab-content Permission_box_tab">

                      <div id="Leads" class="tab-pane fade in active">
						
                        <h2> Leads </h2>
                        <hr />
                        
                  			
                          <div class="hierarchy-node row ">
                    
                                  <input class="hierarchy-checkbox inPut_1" id="selectAll" type="checkbox"> 
                                   <label class="hierarchy-label inPut_2"> All</label>

                             
                                      <?php // foreach ($AllFeatures as $value) {
                                      //if($value['module_id'] == '1'){/?>
                                            <div class="hierarchy-node col-md-2 leaf ">
                                                <input class="hierarchy-checkbox" name="permissions[]"  value="<?php //echo   $value['id'] ?>" type="checkbox">
                                                <label class="hierarchy-label"><?php //echo $value['features_name'] ;?></label>
                                             </div>
                                
                                        <?php
                                      //} } ?>
                                      
                             </div>
                            
                       </div>
                        <div id="crmSettings" class="tab-pane fade hierarchy-node leaf" >
                        
                         <h2> CRM Settings </h2>
                         <hr />
                         
                            <div class="hierarchy-node row">
                          
                                        <input id="selectAll" class="hierarchy-checkbox inPut_1"  type="checkbox">
                                         <label class="hierarchy-label inPut_2">All</label> 

                           
                              <?php // foreach ($AllFeatures as $value) {
                                    //  if($value['module_id'] == '2'){?>
                                        <div class="hierarchy-node col-md-2 leaf ">
                                          <input class="hierarchy-checkbox" name="permissions[]"  value="<?php// echo   $value['id'] ?>" type="checkbox">
                                            <label class="hierarchy-label"><?php// echo $value['features_name'] ;?></label>
                                         </div>
                                      
                                              <?php
                                         //   } } ?>
                           
                            </div>
                        </div>
                        <div id="AddAccounts" class="tab-pane fade hierarchy-node leaf">
                          <div class="hierarchy-node row">
                          
                           <h2>Add Accounts</h2>
                           <hr />
                          
                                       <input id="selectAll" class="hierarchy-checkbox inPut_1"  type="checkbox">
                                         <label class="hierarchy-label inPut_2">All</label> 

                          
                         
                          <?php //foreach ($AllFeatures as $value) {
                                         //   if($value['module_id'] == '3'){?>
                                      <div class="hierarchy-node col-md-2 leaf ">
                                            <input  class="hierarchy-checkbox" name="permissions[]"  value="<?php// echo   $value['id'] ?>" type="checkbox">
                                            <label class="hierarchy-label"><?php// echo $value['features_name'] ;?></label>
                                         </div>
                                      
                                              <?php
                                          //  } } ?>
                            
                           </div>
                        </div>
                          <div id="Settings" class="tab-pane fade">
                              <div class="hierarchy-node row">
                              
                              <h2> Settings </h2>
                              <hr />
                            
                                     <input id="selectAll" class="hierarchy-checkbox inPut_1"  type="checkbox">
                                           <label class="hierarchy-label inPut_2" >All</label> 
                           
                            
                             <?php // foreach ($AllFeatures as $value) {
                                          //    if( $value['module_id'] == '4'){?>
                                             
                                           <div class="hierarchy-node col-md-2 leaf ">
                                              <input class="hierarchy-checkbox" name="permissions[]"  value="<?php //echo   $value['id'] ?>" type="checkbox">
                                              <label class="hierarchy-label"><?php //echo $value['features_name'] ;?></label>
                                           </div>
                                        
                                           <?php
                                            //  } } ?>
                                     
                             </div>
                          </div>
                            <div id="Mailer" class="tab-pane fade">
                                         <div class="hierarchy-node row">
                                         
                                           <h2> Mailer </h2>
                                           <hr />
                                        
                                                     <input id="selectAll" class="hierarchy-checkbox inPut_1"  type="checkbox">
                                                       <label class="hierarchy-label inPut_2" >All</label> 
                                      
                                                 <?php // foreach ($AllFeatures as $value) {
                                                        //  if( $value['module_id'] == '6'){?>
                                                         
                                                       <div class="hierarchy-node col-md-2 leaf ">
                                                          <input class="hierarchy-checkbox" name="permissions[]"  value="<?php// echo   $value['id'] ?>" type="checkbox">
                                                          <label class="hierarchy-label"><?php// echo $value['features_name'] ;?></label>
                                                       </div>
                                                    
                                                       <?php
                                                          //} } ?>
                                        </div>
                             </div>
                             <div id="Universal" class="tab-pane fade">
                                         <div class="hierarchy-node row">
                                         
                                           <h2> Universal </h2>
                                           <hr />
                                        
                                                     <input id="selectAll" class="hierarchy-checkbox inPut_1"  type="checkbox">
                                                       <label class="hierarchy-label inPut_2" >All</label> 
                                      
                                                 <?php// foreach ($AllFeatures as $value) {
                                                        //  if( $value['module_id'] == '7'){?>
                                                         
                                                       <div class="hierarchy-node col-md-2 leaf ">
                                                          <input class="hierarchy-checkbox" name="permissions[]"  value="<?php// echo   $value['id'] ?>" type="checkbox">
                                                          <label class="hierarchy-label"><?php// echo $value['features_name'] ;?></label>
                                                       </div>
                                                    
                                                       <?php
                                                        //  } } ?>
                                        </div>
                             </div>

                             
                </div>
            </div>
            
            
            
     </div>
            
            
            
              
  
  
</div>
            
            </div> 
             
             
             
             
            <div class=" col-md-4 mt-4">
               <button type="submit" class="btn btn-primary" id="add_roles"> Submit </button>     
            </div>
        
      </div>
   </form>
              </div>
            </div>
            </div>
</div>
            @include('footer')

<script>
var ele = document.getElementById('container');
if(ele) {
    ele.style.visibility = "visible";
 }   
        </script>

 
 
 
 
 
 

 
  <script>
 $(document).ready(function(){

  
 $.ajax({ 


   url: "{{url ('rolestree') }}",
   method:"GET",
    dataType: "json",       
   success: function(data)  
   {
 
   console.log(roles);
  var tree1 = new ej.navigations.TreeView({
    fields: { dataSource: data, id: 'id', text: 'role_name', child: 'nodes' },
    loadOnDemand: false,

    
});
tree1.appendTo('#tree');
$('.e-list-item').click(function () {
             var item = document.getElementsByClassName('e-active');
               
          if (item[0]) {
            var reporting_to =item[0].getAttribute('data-uid');
            console.log(reporting_to);
            $('#reporting_to').val(reporting_to);

          } else {
            console.log('Nothing selected');
          }
          });

   
   }   
 });
 
});
</script>
                          
<script>
   function displayDivDemo(id, elementValue) {
      document.getElementById(id).style.display = elementValue.value == 1 ? 'block' : 'none';
   }
</script>
<script >
   $(document).ready( function () {
     $("#add_roles").click(function() {
     var permissionNodeList = document.getElementsByName("permissions[]");
     
      
     var permission = [];
   
     for (var i = 0; i < permissionNodeList.length; i++) {
    
       if (permissionNodeList[i].checked) {
         permission.push(permissionNodeList[i].value);
         
       }
     $('#add_permission').val(permission); 

   }
  
  
   });
     
   });
</script>
