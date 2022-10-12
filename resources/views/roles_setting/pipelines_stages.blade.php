@include('header')
<div class="content-wrapper">
  <div class="row">
    <div class="col-sm-8 mb-4 mb-xl-0">
      <h4 class="font-weight-bold text-dark"> Pipelines Setting </h4>
      <p class="font-weight-normal mb-2 text-muted"> Add Pipelines Setting </p>
    </div>
    <div class="col-sm-4 mb-4 mb-xl-0">
      <div class="widgetbar text-right">
        <button type="button" class="btn btn-info font-weight-bold" data-animation="slideInRight" data-toggle="modal" data-target="#exampleModalLong-1"><i class="icon-speech-bubble"></i> Add Pipelines Setting </button>
      </div>
    </div>
  </div>
  
  
<div class="row"> 
    <!-- Start col -->
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title"> Pipelines Setting </h5>
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
  
  
  
  <div class="modal fade come-from-modal right" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  slideInRight  animated" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle-1"> Add New Pipelines </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
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
  
  
  
  
  
</div>

@include('footer')