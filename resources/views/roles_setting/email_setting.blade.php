@include('header')
<div class="content-wrapper">


    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Email Setting </h4>
           
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <button type="button" class="btn btn-info font-weight-bold" data-animation="slideInRight"
                    data-toggle="modal" data-target="#exampleModalLong-1"><i class="icon-speech-bubble"></i>
                    Add Email template </button>
            </div>
        </div>
    </div>

   
 


    <div class="row">
        <!-- Start col -->
        
        <div class="card-body">
          
          <div class="table-responsive">
            <table id="default-datatable" class="display table table-striped table-bordered">
              <thead>
                 
                <tr>
                  <th>Sr No</th>
                  <th>Email id</th>
                  <th> Email Auth key </th>
                 
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                 @foreach($data['email_data'] as $val)
                <tr id="{{$val->id}}">
                  <td>{{$loop->iteration}}</td>
                  <td>{{$val->email_id}}</td>
                  <td>{{$val->api_key}}</td>
                
                  <td><div class="btn-group btn-group-sm" style="float: none;">
                       <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#editemail{{$val->id}}" style="float: none; margin: 5px;"><span class="fa fa-pencil"></span></button>
                        <button type="button" onclick="deleteemail('{{$val->id}}')" class="btn btn-danger" style="float: none; margin: 5px;"><span class="fa fa-trash"></span></button>
                    </div></td>
                </tr>
                <!--  -->
                         <div class="modal fade come-from-modal right" id="editemail{{$val->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog  slideInRight  animated" role="document">
                            <form method="post" action="{{url('update-email-details')}}" autocomplete="nope">
                               @csrf
                               <input type="hidden" name="eid" value="{{$val->id}}">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle-1"> Edit with Authkey </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group mb-10">
                                  <label>Email Address:</label>
                                  <input type="email" name="email_id" class="form-control bg_input" placeholder="Enter your Email Address" required="" value="{{$val->email_id}}">
                                </div>
                                <div class="form-group mb-10">
                                  <label>Email Auth Key:</label>
                                  <input type="text" placeholder="Enter your Email Authkey" name="auth_Key" class="form-control bg_input " required="" value="{{$val->api_key}}">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                            </div>
                          </form>
                          </div>
                        </div>
                <!--  -->
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

        <!-- End col -->
        <!-- Start col -->

        <!-- End col -->
    </div>
</div>
<div class="modal fade come-from-modal right" id="addemail" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  slideInRight  animated" role="document">
    <form method="post" action="{{url('add-email-details')}}" autocomplete="nope">
                @csrf
                             
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle-1"> Add Emailid with Authkey </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-10">
          <label>Email Address:</label>
          <input type="email" name="email_id" class="form-control bg_input" placeholder="Enter your Email Address" required="">
        </div>
        <div class="form-group mb-10">
          <label>Email Auth Key:</label>
          <input type="text" placeholder="Enter your Email Authkey" name="auth_Key" class="form-control bg_input " required="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
  </div>
</div>
</div>
@include('footer')

<script type="text/javascript">
        function deleteemail(id) {
       
            
          swal({
              title: "Are you sure to delete ?",
              text: "You will not be able to recover this  !!",
              type: "warning",
              showCancelButton: !0,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it !!",
             
               buttons: true,
            dangerMode: true,
          }).then((willDelete) => {

            if (willDelete) {
              $.ajax({
                type:"GET",
                  url: "{{url('/delete-email-details') }}/" + id,
                  
                  success : function () {

                    swal("Deleted !!", " Email details has been deleted !!", "success")

                    $("#"+id).remove();
                  },
              });


             }
             else
              {
                 swal("Deleted !!", "some error occured in delete Email details!!", "error")
              }
             
          });

      }

      </script> 
