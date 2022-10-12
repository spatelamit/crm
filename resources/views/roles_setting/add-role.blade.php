 @include('header')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

    <link href="//cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet">
      <link href="//cdn.syncfusion.com/ej2/ej2-inputs/styles/material.css" rel="stylesheet">
    <link href="//cdn.syncfusion.com/ej2/ej2-navigations/styles/material.css" rel="stylesheet">
    
    
<script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>


<div class="contentbar">

<div class="row">
 <div class="col-md-12 ">
 
 				 <h3 class="panel-title text-uppercase text-bold text-rg heading-line-below heading-line-below-short ">   Create Role </h3>	
              <div class="panel panel-default" id="box1-delete">
              <div class="panel-body input_my">
              
           <form action="{{url('save-role')}}" method="post" enctype="multipart/form-data">
            @csrf
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
                          <ul class="nav nav-tabs">
                                    <li class="active" ><a data-toggle="tab" href="#Leads">Leads</a></li>
                                    <li><a data-toggle="tab" href="#crmSettings">CRM Settings</a></li>
                                    <li><a data-toggle="tab" href="#AddAccounts">Users</a></li>
                                    <li><a data-toggle="tab" href="#Settings">Roles Settings</a></li>
                                    <li><a data-toggle="tab" href="#Mailer">Mailer</a></li>
                                    <li><a data-toggle="tab" href="#Universal">Universal Filter</a></li>
                                </ul>
            		    	</div>
                      </div>
            
               <div class="col-md-10">
                  <div class="tab-content ">

                      <div id="Leads" class="tab-pane fade in active">
						
                        <h2> Leads </h2>
                        <hr />
                        
                  			
                          <div class="hierarchy-node row ">
                    
                                 
                             <input type="hidden" name="title" value="leads">
                                      <div class="hierarchy-node col-md-2 leaf ">
                                          <input class="hierarchy-checkbox" name="lead_view" value="0" checked="unchecked"  type="checkbox">
                                            <label class="hierarchy-label">View</label>
                                             <input class="hierarchy-checkbox" name="lead_edit" value="0"  checked="unchecked" type="checkbox">
                                            <label class="hierarchy-label">Edit</label>
                                             <input class="hierarchy-checkbox" name="lead_delete" value="0"  checked="unchecked" type="checkbox">
                                            <label class="hierarchy-label">Delete</label>
                                         </div>
                                      
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
 
   
  var tree1 = new ej.navigations.TreeView({
    fields: { dataSource: data, id: 'id', text: 'role_name', child: 'nodes' },
    loadOnDemand: false,

    
});

tree1.appendTo('#tree');
// console.log(tree1);
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
  $('.hierarchy-checkbox').on('change', function(){
   this.value = this.checked ? 1 : 0;
   alert(this.value);
}).change();
</script>
