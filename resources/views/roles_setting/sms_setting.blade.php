@include('header')
<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-8 mb-4 mb-xl-0">
      <h4 class="font-weight-bold text-dark"> SMS Setting </h4>
      <p class="font-weight-normal mb-2 text-muted"> Add SMS template </p>
    </div>
    <div class="col-sm-4 mb-4 mb-xl-0">
      <div class="widgetbar text-right">
        <button type="button" class="btn btn-info font-weight-bold" data-animation="slideInRight" data-toggle="modal" data-target="#exampleModalLong-1"><i class="icon-speech-bubble"></i> Add SMS template </button>
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
            <h5 class="card-title">SMS Template List </h5>
          </div>
          <div class="card-body">
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
                    <td><div class="btn-group btn-group-sm" style="float: none;">
                        <button type="button" class="btn btn-info" style="float: none; margin: 5px;"><span class="fa fa-pencil"></span></button>
                        <button type="button" class="btn btn-danger" style="float: none; margin: 5px;"><span class="fa fa-trash"></span></button>
                      </div></td>
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
</div>
<div class="modal fade come-from-modal right" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  slideInRight  animated" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle-1"> Add SMS template</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
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
@include('footer')