
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
                        <h4 class="page-title">  SMS Setting </h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">CRM</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> SMS Setting </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                        
                        <button type="button" class="btn btn-primary mt-1 model-animation-btn" data-animation="slideInRight" data-toggle="modal" data-target="#exampleModalLong-1">
                                           
Add SMS template
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
                                <h5 class="card-title">Edit with button</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                 <div class="table-responsive">
                                    <table id="default-datatable" class="display table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Sr No</th>
                                            <th>Sender id</th>
                                            <th>PE id</th>
                                            <th>Template id</th>
                                            <th>Template</th>
                                             <th>Created Date</th> 
                                               <th>Action </th>                      
                                                                                          
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                              <td>1</td>
                                              <td>Mark</td>
                                              <td>CEO</td>
                                              <td>demo@example.com</td>
                                              <td>9898989898</td> 
                                               <td>9898989898</td>  
         
        <td> <div class="btn-group btn-group-sm" style="float: none;">
        <button type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>
       <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
          </div>                                     </td>                           
                                          </tr>
                                          
                                          
                                        </tbody>
                                    </table>
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
                                                <h5 class="modal-title" id="exampleModalLongTitle-1">
Add SMS template</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                
                                
                                 <div class="form-group mb-10">
                                <label>Authentication Key:</label>
                            <input type="text" name="authKey" class="form-control bg_input" placeholder="Enter your Authentication Key" required>
                                      </div>  
                                        
                                   <div class="form-group mb-10">      
                               <label>Sender Id:</label>
                            <input type="text" placeholder="Enter your Sender Id (Its should be 6  characters)" pattern="[A-Za-z]{6}" title="6 haracters allowd, not a numerics " name="sender_id" class="form-control bg_input " required> 
                            </div>
                            
                            
                            
                             <div class="form-group mb-10">
                              <label>PE ID:</label>
                            <input type="text" pattern="[0-9]{19}" title="PE ID  should be 19 digit" name="pe_id" class="form-control bg_input" placeholder="Enter your PE ID (Its should be 19 digit)" required>         
                                   </div>     
                                    
                                 
                                  <div class="form-group mb-10">   
                               <label>Template_ID:</label>
                            <input type="text" name="template_id" pattern="[0-9]{19}" title="template ID  should be 19 digit" class="form-control bg_input" placeholder="Enter Template ID " required>      
                                    </div>
                                    
                                    <div class="form-group mb-10"> 
                                <label>Content:</label>
                            <textarea name="message" class="form-control bg_input" placeholder="Enter your Content" required></textarea>     
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