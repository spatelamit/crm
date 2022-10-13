@include('header')

<div class="content-wrapper">


<div class="row">
    <div class="col-sm-8 mb-4 mb-xl-0">
      <h4 class="font-weight-bold text-dark"> Roles </h4>
      <p class="font-weight-normal mb-2 text-muted"> Add Roles </p>
    </div>
    <div class="col-sm-4 mb-4 mb-xl-0">
      <div class="widgetbar text-right">
        <a class="btn btn-info font-weight-bold" href="{{url('add-role')}}"  > <i class="fa fa-user-plus"></i> Create Role </a>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

<div class="row">
<div class="col-lg-12">
      
      
      <div class="card m-b-30">
      <div class="card-header">
            <h5 class="card-title">SMS Template List </h5>
          </div>
      
      <div class="card-body">
       <div class="table-responsive">
        <table id="roles" class="display table table-striped table-bordered">
          <thead>
            <tr>
              <th  >ID</th>
              <th>Roles Name</th>
              <th>Reporting To</th>
              <th> Description</th>
             <!--  <th>Permission Type</th> -->
              <th>Actions </th>
            </tr>
          </thead>
          <tbody>
          @foreach($data['role_list'] as $value)
          @if($value->reporting_to!= '0')
            <tr>
              <td class="details-control">{{$loop->iteration}}</td>
              <td> <a href="">{{$value->role_name}}</a></td>
              <td>{{$value->parentsName}}</td>
              <td>{{$value->role_des}}</td>
             
              <td>
              
              <div class="btn-group btn-group-sm" style="float: none;">
                       
                        
   <a class="btn btn-info mr-2"  href="{{url('/edit-role',$value->id)}}"><span class="fa fa-pencil" style="float: none; margin: 5px;"></span> </a>
    <a class="btn btn-danger"  onclick="deletedata('{{$value->id}}')"> <span class="fa fa-trash" style="float: none; margin: 5px;"></span>   </a>
                        
                        
                      </div>
              
              
              
              </td>
            </tr>
            @endif
           @endforeach
          </tbody>
        </table>
        </div>
        </div>
        </div>
      </div> 

</div>






</div>








 @include('footer')
 <script type="text/javascript">
        function deletedata(id) {
        // alert(id);
            
          swal({
              title: "Are you sure to delete ?",
              text: "You will not be able to recover this imaginary file !!",
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
                  url: "{{url('/delete-role') }}/" + id,
                  
                  success : function () {

                    swal("Deleted !!", "Hey, your Role has been deleted !!", "success")

                    $("#"+id).remove();
                  },
              });


             }
             else
              {
                 swal("Deleted !!", "some error occured in delete data!!", "error")
              }
             
          });

      }

      </script> 
