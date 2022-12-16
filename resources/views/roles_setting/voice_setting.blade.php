	@include('header')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Voice Setting </h4>
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <button type="button" class="btn btn-info font-weight-bold" data-animation="slideInRight"
                    data-toggle="modal" data-target="#addvoice"><i class="icon-speech-bubble"></i>
                    Add Voice Template </button>
            </div>
        </div>
    </div>

   
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table id="default-datatable" class="display table table-striped table-bordered">
                      <thead>
                      	<th>Sr No.</th>
                          <th>Auth key </th>
         
                          <th>Caller Id</th>
                          <th>Voice Content</th>
                          <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($data['voice_data'] as $val)
                        <tr id="{{$val->id}}">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$val->auth_key}}</td>
                          <td>{{$val->caller_id}}</td>
                          <td>{{$val->msg_content}}</td>
                        
                          <td><div class="btn-group btn-group-sm" style="float: none;">
                               <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#editvoice{{$val->id}}" style="float: none; margin: 5px;"><span class="fa fa-pencil"></span></button>
                                <button type="button" onclick="deletevoice('{{$val->id}}')" class="btn btn-danger" style="float: none; margin: 5px;"><span class="fa fa-trash"></span></button>
                            </div></td>
                        </tr>
                                 <div class="modal fade come-from-modal right" id="editvoice{{$val->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog  slideInRight  animated" role="document">
                                    <form method="post" action="{{url('update-voice-details')}}" autocomplete="nope">
                                       @csrf
                                       <input type="hidden" name="eid" value="{{$val->id}}">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle-1"> Edit with Authkey </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form-group mb-10">
                                          <label>Caller ID</label>
                                          <input type="text" name="caller_id" class="form-control bg_input" placeholder="Enter your Caller Id" required="" value="{{$val->caller_id}}">
                                        </div>
                                        <div class="form-group mb-10">
                                          <label>Auth Key:</label>
                                          <input type="text" placeholder="Enter your Authkey" name="auth_Key" class="form-control bg_input " required="" value="{{$val->auth_key}}">
                                        </div>

                                        <div class="form-group mb-10">
                                          <label>Message Content</label>

                                          <textarea id="msg_content" name="msg_content" rows="4" cols="50" class="form-control bg_input" placeholder="Enter your Message Content" required="">{{$val->msg_content}}</textarea>
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
        </div>
      </div>
    </div>
</div>
<div class="modal fade come-from-modal right" id="addvoice" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  slideInRight  animated" role="document">
    <form method="post" action="{{url('add-voice-details')}}" autocomplete="nope">
                @csrf
                             
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle-1"> Add Voice Details </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-10">
          <label>Caller Id</label>
          <input type="text" name="caller_id" class="form-control bg_input" placeholder="Enter your Caller Id" required="">
        </div>
        <div class="form-group mb-10">
          <label>Auth Key:</label>
          <input type="text" placeholder="Enter your Auth key" name="auth_Key" class="form-control bg_input " required="">
        </div>

        <div class="form-group mb-10">
          <label>Message Content</label>

          <textarea id="msg_content" name="msg_content" rows="4" cols="50" class="form-control bg_input" placeholder="Enter your Message Content" required=""></textarea>
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
        function deletevoice(id) {
       
            
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
                  url: "{{url('/delete-voice-details') }}/" + id,
                  
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