@include('header')
<div class="contentbar">

    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Roles </h4>
           
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <a class="btn btn-info font-weight-bold" href="{{url('add-leads')}}" > <i class="fa fa-user-plus"></i>
                    Create Role </a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">


            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Leads List </h5>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="roles" class="display table table-striped table-bordered">
                            <thead>
                                 
                                <tr>
                                    <th>Sr no</th>
                              
                                   @foreach ($data['leads_data'][0] as $key => $value)
                                       <th>{{$key}}</th>

                                   @endforeach 
                                     <th>Actions </th>
                               
                                </tr>
                            
                            </thead>
                            <tbody>
                             @foreach( $data['leads_data'] as $key1=>$field)
                                 
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                          @foreach ($field as $key => $value)
                                            <td class="details-control">{{$value}} </td>
                                            @endforeach 

                                            <td>

                                                <div class="btn-group btn-group-sm" style="float: none;">


                                                    <a class="btn btn-info mr-2" href="{{url('edit-lead',$data['leads_data'][$key1]['data_id'])}}" 
                                                       ><span
                                                            class="fa fa-pencil"
                                                            style="float: none; margin: 5px;"></span> </a>
                 <a class="btn btn-danger" onclick="deletelead( '{{ $data['leads_data'][$key1]['data_id'] }}' )" 
                                                       > <span
                                                            class="fa fa-trash"
                                                            style="float: none; margin: 5px;"></span> </a>


                                                </div>



                                            </td>
                                        </tr>
                                        <!-- edit -->
                         
                                        <!-- edit -->
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
        function deletelead(id) {
      
            
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
                  url: "{{url('/delete-lead') }}/" + id,
                  
                  success : function () {

                    swal("Deleted !!", "Lead has been deleted !!", "success")
                     // alert(id);
                    $("#"+id).remove();
                  },
              });


             }
             else
              {
                 swal("Deleted !!", "some error occured in delete Lead!!", "error")
              }
             
          });

      }

      </script> 
