
<?php include 'header.php';?>
<style>
.come-from-modal.left .modal-dialog,
.come-from-modal.right .modal-dialog {
    position: fixed;
    margin: auto;
width: 460px;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}

.come-from-modal.left .modal-content,
.come-from-modal.right .modal-content {
    height: 100%;
    overflow-y: auto;
    border-radius: 0px;
}

.come-from-modal.left .modal-body,
.come-from-modal.right .modal-body {
    padding: 15px 15px 80px;
}
.come-from-modal.right.fade .modal-dialog {
    right:0px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
}

.come-from-modal.right.fade.in .modal-dialog {
    right: 0;
}

.bg_input {
  background-color: #f6f9fc;
}

</style>

<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title"> Pipelines Setting  </h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">CRM</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Pipelines Setting </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                        
                        <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="slideInRight" data-toggle="modal" data-target="#exampleModalLong-1">
                                           
Add New Pipeline
                                        </button>
                        
                            
                        </div>                        
                    </div>
                </div>          
            </div>
            
            
            
            
            
            
            

            
            
            
            
            
            
                
    <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title"> Pipelines Setting   </h5>
                            </div>
                            <div class="card-body">
                               
                                 <div class="cart-container">
                                            <div class="cart-head">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">sales Group</th>
                                                                <th scope="col">Action</th> 
                                                                
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"> Ashish </th>
                                                                <td><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                  
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>

                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>          
            
            
            
            
            
            
            
            
         <div class="modal fade come-from-modal right" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog  slideInRight  animated" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLongTitle-1"> Add New Pipelines </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            
                                            
                                            
  
       
                        
                          <div class="form-group mb-10">
                            <label for="pipeline_stage_name">Pipeline name: </label>
                            <input type="text" class="form-control bg_input" placeholder="Like... Initial Contact" name="pipeline_stage_name">
                          </div>
                          
                          
                          
                          <hr>
                          
                  
              
                        
                         <h5>Stage no.1</h5>
               
                           <div class="row">
                           
                           <div class="col-md-8">
                           <div class="form-group mb-10">
                                <label for="stage_name"> Stage name: </label>
                                <input type="text" class="form-control bg_input" placeholder="Like... Initial Contact" name="deal_stage_name[]">
                              </div>
                           </div>
                           
                           <div class="col-md-4">
                           <div class="form-group mb-10">
                                <label for="stage_color"> Stage color: </label>
                                <input type="color" class="form-control bg_input" placeholder="Like... Blue" name="deal_stage_color[]">
                              </div>
                           </div>
                           
                           
                           </div>
                            
           
                              
              
                
                              
                   
                            
                          <hr>
                            
                    
                          <h5>Stage no.2</h5>
      
       					<div class="row">
                           
                           <div class="col-md-8">
                            <div class="form-group mb-10">
                                <label for="stage_name"> Stage name: </label>
                                <input type="text" class="form-control bg_input" placeholder="Like... Initial Contact" name="deal_stage_name[]">
                              </div>
               
                           </div>
                           
                           <div class="col-md-4">
                           
                              <div class="form-group mb-10">
                                <label for="stage_color"> Stage color: </label>
                                <input type="color" class="form-control bg_input" placeholder="Like... Blue" name="deal_stage_color[]">
                              </div>
                           </div>
                           
                     </div>      
                            
       
                             
          
                 
                            
                          <hr>
              
                           <h5>Stage no.3</h5>
                           
                           
                           <div class="row">
                           
                           <div class="col-md-8">
                           <div class="form-group mb-10">
                                <label for="stage_name"> Stage name: </label>
                                <input type="text" class="form-control bg_input" placeholder="Like... Initial Contact" name="deal_stage_name[]">
                              </div>
                           </div>
                           
                           <div class="col-md-4">
                            <div class="form-group mb-10">
                                <label for="stage_color"> Stage color: </label>
                                <input type="color" class="form-control bg_input" placeholder="Like... Blue" name="deal_stage_color[]">
                              </div>
                 
                           </div>
                           
                     </div>      
          
                          
                            
               
                              
              
                     
                             
                            
                          
                            <hr>
                      
                           <h5>Stage no.4</h5>
                           
                           
                           <div class="row">
                           
                           <div class="col-md-8">
                           <div class="form-group mb-10">
                                <label for="stage_name"> Stage name: </label>
                                <input type="text" class="form-control bg_input" placeholder="Like... Initial Contact" name="deal_stage_name[]">
                              </div>
                           </div>
                           
                           <div class="col-md-4">
                            <div class="form-group mb-10">
                                <label for="stage_color"> Stage color: </label>
                                <input type="color" class="form-control bg_input" placeholder="Like... Blue" name="deal_stage_color[]">
                              </div>
                    
                           </div>
                           
                     </div>      
          
                          
                
                              
              
         
                             
                            
                      
                
             
                          
                          
                          
                          
                          
                          
                         
                                  
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
 
                                
                                   
                                        
                                   
                            
                            
                            
                                  
                                    </div>
                                 
                                  
                                    
                 
                                               
                                               
                                               
                                               
                                  
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    

            
            
            
            
            
            
            
            
            
             <?php include 'footer.php';?>