@include('header')

<?php ?>
<div class="contentbar">

    <div class="row">

        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <a class="btn btn-info font-weight-bold" href="{{ url('add-leads') }}"> <i class="fa fa-user-plus"></i>
                    Create Leads </a>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
        aria-expanded="false">Communications</button>
    <div class="dropdown-menu" x-placement="top-start"
        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -99px, 0px);">
        <a class="btn btn-info font-weight-bold" data-animation="slideInRight" data-toggle="modal"
            data-target="#sendsms"> <i class="fa fa-user-plus"></i>
            SendSMS </a>
        <a class="btn btn-info font-weight-bold" data-animation="slideInRight" data-toggle="modal"
            data-target="#sendemail"> <i class="fa fa-user-plus"></i>
            Email </a>
           
            <button class="btn btn-info font-weight-bold"  id="lead_id" onclick="createdeal(this.value)">Deal</button>

    </div>



    <div class="row">
        <div class="col-lg-12">


            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Leads List </h5>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="leads" class="display table ">
                            <thead>


                                


                                 
                                <tr><div>
                                    
                                    <th><input id="selectAll" type="checkbox" name="selectAll"></th>
                                </div>
                   @if( $data['leads_data'] != null )
                         @foreach ($data['leads_data'][0] as $key => $value)

                                       <th>{{$key}}</th>

                                   @endforeach 
                                    <th>Actions </th>
                         
                   
                 @endif
                                    
                               

                                </tr>

                            </thead>
                            <tbody>

                         @if( $data['leads_data']!=null)
                             @foreach( $data['leads_data'] as $key1=>$field)
                                 
                                        <tr>
                                           
                                            <td> <div>
                                                <input class="data_id" type="checkbox" name="data_id" value="
                                                {{$data['leads_data'][$key1]['data_id']}}">
                                                <input id="email{{$loop->iteration}}" class="email" type="checkbox" name="email" value="{{$data['leads_data'][$key1]['email_address']}}" style="display: none;">
                                                <input id="mobile_num{{$loop->iteration}}" class="mobile_num" type="checkbox" name="mobile_num" value="{{$data['leads_data'][$key1]['contact_number']}}" style="display: none;"> 
                                                 </div>
                                            </td>
                                         
                                        @foreach ($field as $key => $value)

                                         @if( $key == 'data_id')
                                         <td  class="details-control"> <a href="">{{        $data['leads_data'][$key1]['data_id'] }}</a> </td>

                                        @else

                                            <td  class="details-control"> {{ $value }}</td>
                                       @endif
                                        @endforeach

                                        <td>

                                            <div class="btn-group btn-group-sm" style="float: none;">


                                                <a class="btn btn-info mr-2"
                                                    href="{{ url('edit-lead', $data['leads_data'][$key1]['data_id']) }}"><span
                                                        class="fa fa-pencil" style="float: none; margin: 5px;"></span>
                                                </a>
                                                <a class="btn btn-danger"
                                                    onclick="deletelead( '{{ $data['leads_data'][$key1]['data_id'] }}' )">
                                                    <span class="fa fa-trash" style="float: none; margin: 5px;"></span>
                                                </a>


                                            </div>




                                            </td>
                                        </tr>
                                        <!-- edit -->
                         
                                        <!-- edit -->
                                       @endforeach
                                      @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="modal fade come-from-modal right" id="sendemail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <form method="post" action="{{ url('add-sms-details') }}" autocomplete="nope">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-10">
                        <label>Authentication Key:</label>
                        <input type="text" name="authKey" class="form-control bg_input email_ids"
                            placeholder="Enter your Authentication Key" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!--  -->
<div class="modal fade come-from-modal right" id="sendsms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <form method="post" action="{{ url('add-sms-details') }}" autocomplete="nope">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-10">
                        <label>Authentication Key:</label>
                        <input type="text" name="sms_numbers" class="form-control bg_input sms_numbers"
                            placeholder="Enter your Authentication Key" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--  -->
<!--  -->
<div class="modal fade come-from-modal right" id="leaddeal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <form method="post" action="{{ url('add-sms-details') }}" autocomplete="nope">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-10">
                        <label>Authentication Key:</label>
                        <input type="text" name="sms_numbers" class="form-control bg_input sms_numbers"
                            placeholder="Enter your Authentication Key" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--  -->
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
                    type: "GET",
                    url: "{{ url('/delete-lead') }}/" + id,

                    success: function() {

                        swal("Deleted !!", "Lead has been deleted !!", "success")
                        // alert(id);s
                        $("#" + id).remove();
                    },
                });


            } else {
                swal("Deleted !!", "some error occured in delete Lead!!", "error")
            }

        });

    }
</script>
<script>
    $(document).ready(function() {
        $('#leads').DataTable({
            dom: 'Bfrtip',
            scrollX: true,

            buttons: [
                'colvis'
            ]

        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(':checkbox[id="selectAll"]').click(function() {
         var val1 = [];
            var val2 = [];
            var val3 = [];
            if ($(this).is(':checked')) {


                $(".data_id").prop("checked", true);
                $(".email").prop("checked", true);
                $(".mobile_num").prop("checked", true);
                $('.email').each(function(i) {
                    val2[i] = $(this).val();

                });
                $('.mobile_num').each(function(i) {
                    val3[i] = $(this).val();
                    // alert(val3[i]);
                });
            } else {
                $(".name").prop("checked", false);
                $(".data_id").prop("checked", false);
                $(".email").prop("checked", false);
                $(".mobile_num").prop("checked", false);
                $(".app-checkbox").prop("checked", false);
                // $('.email').each(function(i){
                //        val2[i] = $(this).val();
                //      });
            }

            var val1 = [];
            $('.data_id').each(function(i) {
                val1[i] = $(this).val();

            });

            // $("#selectedemails").val(val1);

            val2 = val2.filter(Boolean);
            val3 = val3.filter(Boolean);
            $(".email_ids").val(val2);
            $(".email_ids").attr("readonly", "readonly");

            $(".sms_numbers").val(val3);
            $(".sms_numbers").attr("readonly", "readonly");
            $("#selectedemails").val(val2);
            $("#selectedcontacts").val(val3);
            // console.log(val2);
            // console.log(val3);
        });


        $(':checkbox[class="data_id"]').click(function() {
            var data_id = [];
            if ($(this).is(':checked')) {
                $(".mobile_num").prop("checked", true);
                $(".ids12").prop("checked", true);
                $(".email").prop("checked", true);

               
                    data_id= $(this).val();
                   
               $("#lead_id").val(data_id);

            } else {
                $(".mobile_num").prop("checked", false);
                $(".ids12").prop("checked", false);
                $(".email").prop("checked", false);
            }



            // $(".email_ids").val(val2);
            // console.log(val2);

        });



    });
</script>
