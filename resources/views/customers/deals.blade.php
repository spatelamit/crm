@include('header')

@include('customers.add-deal');
<div class="content-wrapper">


    <div class="row mb-3">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Deal </h4>

        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">

                
             <!-- <a class="btn btn-info font-weight-bold mr-2" href="{{ url('add-deal') }}"> <i
                        class="fa fa-user-plus"></i>
                    Create Deal </a> -->
                     <a class="btn btn-info font-weight-bold new_w mr-2" 
                               onclick="modals('newdeal')" > <i class="fa fa-user-plus"></i>
                                Add Deal </a>

<a class="btn btn-info font-weight-bold mr-2" href="{{ url('deals') }}"> <i
                        class="fa fa-user-plus"></i>
                     Grid view </a>


                <a class="btn btn-info font-weight-bold new_w mr-2" id="Filter_box"><i class="fa fa-filter"
                        aria-hidden="true"></i>
                    Filter </a>


                <div class="btn-group-vertical mr-2 " role="group" >
                    <div class="btn-group">
                        <button type="button" class="btn btn-info font-weight-bold dropdown-toggle"
                            data-toggle="dropdown"><i class="fa fa-comments-o" aria-hidden="true"></i>
                            Communications </button>
                        <div class="dropdown-menu">


                            <a class="dropdown-item" data-animation="slideInRight" data-toggle="modal"
                                data-target="#sendsms"> <i class="fa fa-user-plus"></i>
                                SendSMS </a>

                            <a class="dropdown-item" data-animation="slideInRight" data-toggle="modal"
                                data-target="#sendemail"> <i class="fa fa-user-plus"></i>
                                Email </a>

                            <a class="dropdown-item" data-animation="slideInRight" data-toggle="modal"
                                data-target="#leadtask"> <i class="fa fa-user-plus"></i>
                                Task </a>


                            <!--   <a class="dropdown-item"  id="lead_id" onclick="createdeal(this.value)">Task</a> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>







    <div class="row">
        <div class="col-md-12 " id="bid_d">


            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Deal List </h5>
                </div>
                 <div class="m-b-10">
                     <a class=" btn btn-info" data-animation="slideInRight" data-toggle="modal"
                                data-target="#managecol"> 
                                Manage columns </a>
                </div>
                 <div class="m-b-10">

                
                       
                 <input type="hidden" id="mod_id" value="9">
                     <select name="view_data" id="view_data" >
                        <option value="select">Select </option>
                        <option value="all_leads" {{ $data['filter_name'] == 'all_leads'?'selected':''}} >All Deals</option>
                        <option value="my_leads"  {{ $data['filter_name'] == 'my_leads'?'selected':''}}>My Deals</option>
                         <option value="today"  {{ $data['filter_name'] == 'today'?'selected':''}}>Today Deals</option>
                     </select> 
                        
            
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive lead_search" >
                        <table  class="display table leads ">
                            <thead>



                                <tr>
                                    <div>

                                        <th><input id="selectAll" type="checkbox" name="selectAll"></th>
                                    </div>
                                    <th>Id</th>
                                    <th>Sale Person</th>
                                     @if ($data['selected_col'] != null)
                                        @foreach ($data['selected_col'] as $key => $value)

                                            <th>{{ $value->col_name }}</th>
                                         
                                        @endforeach
                                       


                                    @endif

                        <th>Actions </th>


                                </tr>

                            </thead>
                            <tbody>

                                @if ($data['deal_data'] != null)
                                    @foreach ($data['deal_data'] as $key1 => $field)
                                        <tr>

                                            <td>
                                                <div>
                                                    <input class="data_id" type="checkbox" name="data_id"
                                                        value="
                                                {{ $data['deal_data'][$key1]['data_id'] }}">
                                                  
                                                </div>
                                            </td>

                                               
                                                    <td class="details-control"> <a
                                                            href="{{ url('single-profile', [$data['deal_data'][$key1]['data_id'],9]) }}">{{ $data['deal_data'][$key1]['data_id'] }}</a>
                                                    </td>
                                                    <td>{{ $data['deal_data'][$key1]['user'] }}</td>
                                              
                            @forelse ($data['selected_col'] as $key => $selvalue)
                                @if(isset($data['deal_data'][$key1][$selvalue->col_name]))
                                                @if($selvalue->col_name=='company_name')
                                                 <td class="details-control"> <a
                                                            href="{{ url('single-profile', [$data['deal_data'][$key1]['account_id'],'10']) }}">{{ $data['deal_data'][$key1][$selvalue->col_name] }}</a>
                                                 </td>
                                                @else

                                               
                                                  <td class="details-control">
                                                 <?php if(isset($data['deal_data'][$key1][$selvalue->col_name] )){ ?>
                                                 {{ $data['deal_data'][$key1][$selvalue->col_name] }}
                                                     <?php } else{
                                                        echo 'Null';
                                                     }?>
                                                 </td>
                                                @endif
                                            @else
                                            <td>null</td>
                                            @endif
                                  @empty
                            @endforelse
                                        
                                            <td>

                                                <div class="btn-group btn-group-sm" style="float: none;">


                                                    <!-- <a class="btn btn-info mr-2"
                                                        href="{{ url('edit-lead',[ $data['deal_data'][$key1]['data_id'],9]) }}"><span
                                                            class="fa fa-pencil"
                                                            style="float: none; margin: 5px;"></span>
                                                    </a> -->
                                                    <a class="btn btn-info mr-2" onclick="editdata('{{$data['deal_data'][$key1]['data_id']}}','9')"> 
                               <span
                                                            class="fa fa-pencil"
                                                            style="float: none; margin: 5px;"></span> </a>
                                                    <a class="btn btn-danger"
                                                        onclick="deletelead( '{{ $data['deal_data'][$key1]['data_id'] }}' )">
                                                        <span class="fa fa-trash"
                                                            style="float: none; margin: 5px;"></span>
                                                    </a>


                                                </div>




                                            </td>
                                        </tr>
                                       
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3 b-left fadeIn p-0 d-none" id="small_d">

            <div class="block block-condensed">





                <div class="block-heading mb-0">
                    <!-- HEADING -->

                    <div class="app-heading app-heading-bordered app-heading-page row">

                        <div id="listOfSavedFilter" class="filters_box_row1 mt-5">
                            <select class="form-control col-md-6" id="saveFilter" name="saveFilter">
                                <option>Select Save Filter</option>


                                <option value=""></option>


                            </select>
                        </div>

                    </div>
                </div>
            </div>





            <form action="javascript:void(0)" id="leads_filter">
                @csrf
                <input type="hidden" id='coun_filter' name="coun_filter" value="0">

                 <input type="hidden" name="module_id" value="9">
                <div class="block block-condensed">

                    <div class="block-heading mb-0">
                        <!-- HEADING -->


                        <div class="app-heading app-heading-bordered app-heading-page row">
                            <select name="ftaticfilter" class="form-control col-md-6"
                                style="border: 1px solid #d5d5d5 !important;" id="StaticFilter">
                                <option value="">Select filter</option>
                                <!--  <option value="untouched">Untouched records</option>
                    <option value="touched">touched records</option> -->
                                <option value="activites">Activites</option>


                               <!--  <option value="lead_type">Lead Types</option>
                                <option value="data_owners">Users</option>
                                <option value="company_names">Company Name</option>
                                <option value="full_name">Person name</option>
                                <option value="email">Email</option>
                                <option value="number">Number</option>
                                <option value="address">Address</option>
                                <option value="pin_code">Pin code</option>
                                <option value="city">City</option>
                                <option value="state">State</option>
                                <option value="country">Country</option>
                                <option value="sectors">Sectors</option> -->


                            </select>
                        </div>



                        <!-- END HEADING -->
                    </div>
                    <div class="block-content " id="idsc">



                    </div>

                    <div class="block-footer pas-0">

                        <div class="row">

                            <div class="col-md-8">
                                <div id="savebutton">
                                    <input class="form-control" type="text"
                                        placeholder="Enter filter name for save" name="filtersave">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-default pull-right"
                                    id="apply">Apply</button>
                            </div>


                        </div>

                    </div>


                </div>

            </form>
        </div>
    </div>

</div>
<!-- add deals -->
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
<!--start task  -->
<div class="modal fade come-from-modal right" id="leadtask" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <form method="post" action="{{ url('save-task') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="related_to" id="related_to" value="">

                     
                        <div class=" col-md-4" id="container">
                            <div class="form-group">
                                <label for="stage_name">Subject: </label>
                                <input class="form-control" name="subject" required="">
                            </div>
                        </div>

                        <div class=" col-md-4" id="container">
                            <div class="form-group">
                                <label for="stage_name">Due Date: </label>
                                <input class="form-control" type="date" name="due_date" required=""
                                    value="yyyy/mm/dd">
                            </div>
                        </div>
                        <div class=" col-md-4" id="container">
                            <div class="form-group">
                                <label for="stage_name">Status: </label>
                                <select class="form-control" id="" name="status">
                                    <option value="0">Just Arrived</option>
                                    <option value="1">In Progress</option>
                                    <option value="2">Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4" id="container">
                            <div class="form-group">
                                <label>Priority: </label>
                                <select class="form-control" name="priority">

                                    <option value="1">Low</option>
                                    <option value="0">High</option>
                                    <option value="2">Medium</option>
                                </select>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-group">
                                <label for="usr"> Description <font style="color:red;">*</font></label>
                                <textarea name="description" placeholder="Description" class="form-control "></textarea>
                            </div>
                        </div>

                        <div class=" col-md-4" id="container">
                            <label for="stage_name"> Add Reminder </label>
                            <div class="Reminder_btn"> <a href="#" class="show_hide btn "> <i
                                        class="fa fa-bell" aria-hidden="true"></i> Reminder </a> </div>
                            <div class="slidingDiv" style="display: block;">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for=""> Select Date & Time </label>
                                                    <input class="form-control" type="date"
                                                        value="yyyy/mm/dd hh:mm" name="reminder" placeholder="Name">
                                                </div>
                                            </div>
                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


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
<!-- end task -->
<!-- Deal modal -->
<!-- Mnagage Columns -->
<div class="modal fade come-from-modal right" id="managecol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">Manage Columns</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <form method="post" action="{{ url('save-managecol') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <ul id="cdsortable">
                           
                      @foreach($data['selected_fields'] as $selfield)
                       <input type="hidden" name="module_id" value="{{$data['selected_fields'][0]->module_id}}">
                          @if(in_array($selfield->column_id,explode(",", $selcol)))
                            <li><input type="checkbox" name="column_id[]" value="{{$selfield->column_id}}" checked="">
                           {{$selfield->col_name}} </li>
                           @else
                            <li><input type="checkbox" name="column_id[]" value="{{$selfield->column_id}}" >
                           {{$selfield->col_name}} </li>
                           @endif
                     
                      @endforeach
                       </ul>
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
<!-- End manage columns -->
<!--end deal modal  -->

@include('footer')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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
<!-- <script>
    $(document).ready(function() {
        $('.leads').DataTable({
            dom: 'Bfrtip',
            scrollX: true,

        });
    });
</script> -->

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


                data_id = $(this).val();
                // alert(data_id);
                $("#lead_id").val(data_id);
                $('#related_to').val(data_id);
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


<script type="text/javascript">
    $("#StaticFilter").change(function() {

        var anem = $("#StaticFilter").val();
        var count = $("#coun_filter").val();
        var available = parseInt(count) + 1;
        var meradata = available;

        if (anem == "untouched" || anem == "touched") {

            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" ><div class="form-group"><select name="dateformat" class="form-control"> <option value="today">Today</option><option value="week">This week</option><option value="month">This month</option><option value="year">This year</option></select></div></div></div></div>';
            $("#idsc").append(text);

        }
        if (anem == "activites") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="activtab"><div class="form-group"><select name="activitiesopt" id="activitiesopt" class="form-control"> <option value="1">Without open Activities</option><option value="2">Overdue</option><option value="3">Activities Due</option><option value="4">Without Activities</option><option value="5">Activities Done</option></select></div></div></div></div>';

            $("#idsc").append(text);



        }
        if (anem == "lead_type") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" ><div class="form-group"><select name="lead_type" id="lead_type" class="form-control"> <option value="1">Hot</option><option value="2">Cold</option><option value="3">Warm</option></select></div></div></div></div>';

            $("#idsc").append(text);



        }
        if (anem == "deal_stages") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="deal_stages"><div class="form-group"><select class="dealstagefilter form-control" name="dealstagefilter" id="dealstagefilter"> <option value="is">Is</option><option value="isnot">Is not</option><option value="isopen">Is open </option><option value="iswon">Is won</option><option value="islost">Is lost</option><option value="isempty">Is Empty </option><option value="isnotempty">Is Not Empty </option></select></div></div></div></div>';
            var deal_input =
                '<div class="form-group deal_search"> <select class="sle" id="dealStageid" name="dealStageid" style="width:300px;"><option value=""></option></select></div>';

            $("#idsc").append(text);
            $("#deal_stages").append(deal_input);



            $("#dealStageid").select2({
                placeholder: {
                    value: '',
                    text: 'None Selected'
                },
                allowClear: true,
                // data:stagename,
            });



        }

        if (anem == "data_owners") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="data_owner_names"><div class="form-group"><select class="userfilter form-control" name="userfilter" id="userfilter"> <option value="is">Is</option><option value="isnot">Is not</option></select></div></div></div></div>';
            var users_input =
                '<div class="form-group deal_search"> <select class="sle"  id="usersid" name="usersid[]" style="width:300px;"><option value=""> </option> </select></div>';

            $("#idsc").append(text);
            $("#data_owner_names").append(users_input);



            $("#usersid").select2({
                placeholder: {
                    value: '',
                    text: 'None Selected'
                },
                allowClear: true,
                multiple: true,
                // data:stagename,
            });



        }
        if (anem == "sectors") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="sectordata"><div class="form-group"><select class="sectorfilter form-control" name="sectorfilter" id="sectorfilter"> <option value="is">Is</option><option value="isnot">Is not</option></select></div></div></div></div>';
            var users_input =
                '<div class="form-group deal_search"> <select class="sle"  id="sectors" name="sectors[]" style="width:300px;">><option value=""></option> </select></div>';

            $("#idsc").append(text);
            $("#sectordata").append(users_input);



            $("#sectors").select2({
                placeholder: {
                    value: '',
                    text: 'None Selected'
                },
                allowClear: true,
                multiple: true,
                // data:stagename,
            });



        }
        if (anem == "company_names") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="data_company_names"><div class="form-group"><select class="companysearch form-control" name="companysearch" id="companysearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="compstart">start with</option><option value="compend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text"  name=comapny_Nsearch required></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "full_name") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="data_full_names"><div class="form-group"><select class="Fnamesearch form-control" name="Fnamesearch" id="Fnamesearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text" name=Fname_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "address") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_address"><div class="form-group"><select class="Addsearch form-control" name="Addsearch" id="Addsearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text" name=add_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "city") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_city"><div class="form-group"><select class="citysearch form-control" name="citysearch" id="citysearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text" name=city_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "state") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_state"><div class="form-group"><select class="statesearch form-control" name="statesearch" id="statesearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text" name=state_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "country") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_country"><div class="form-group"><select class="countrysearch form-control" name="countrysearch" id="countrysearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text" name=country_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "pin_code") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_pin"><div class="form-group"><select class="pinsearch form-control" name="pinsearch" id="pinsearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" type="text" placeholder="Enter your text" name=pin_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "email") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_emailid"><div class="form-group"><select class="emailsearch form-control" name="emailsearch" id="emailsearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" placeholder="Enter your text" type="text" name=email_search required ></div></div></div>';


            $("#idsc").append(text);

        }
        if (anem == "number") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="lead_number"><div class="form-group"><select class="numbersearch form-control" name="numbersearch" id="numbersearch"> <option value="is">Is</option><option value="isnot">Is not</option><option value="contain">Contain</option><option value="searchstart">start with</option><option value="searchend">End with</option></select></div></div><div class="form-group"><input class="form-control" placeholder="Enter your text" type="text" name=number_search required ></div></div></div>';


            $("#idsc").append(text);

        }


        if (anem == "data_type") {
            var text = '<div class="filters_box_row1 mt-5 prashant' + available +
                '"><div class="block bg_g p-3 mt-5" ><div class=""><div class="row"><div class="col-md-10"><div class="title"><h2 class="filt_name">' +
                anem +
                '</h2></div></div><div class="col-md-2"><div class="heading-elements" id="activeadd"><a id="block-delete" onclick="del_div(' +
                meradata +
                ')" class="btn btn-default btn-sm btn-icon" ><span class="fa fa-times"></span></a></div></div></div></div><div class="block-content" id="datatypetab"><div class="form-group"><select name="datatype" id="datatype" class="form-control"> <option value="1">Company Data</option><option value="2">Conatct Data</option><option value="3">deals Data</option></select></div></div></div></div>';
            $("#idsc").append(text);
            var activtab1 =
                '<div class="form-group dataType" id="datatypetab1"><select class="customizedate form-control" name="datatypeopt" id="datatypeopt"> <option value="1">Today</option><option value="2">Yesteday</option><option value="3">This week </option><option value="4">This This month </option><option value="5">This This Year </option><option value="6">customize date </option></select></div>';

            $("#datatypetab").append(activtab1);



        }



        $("#coun_filter").val(available);





        //data-typef


        //dataype customize date
        $("#datatypeopt").change(function() {
            var datatypeopt = $("#datatypeopt").val();
            // alert(datatypeopt);

            $(".custdates").remove();
            if (datatypeopt == '6') {
                var custdate =
                    '<div class="form-group custdates"> Start Date:-<input class="form-control" type="date"     ame="startdate"> End Date:-<input class="form-control" placeholder="End Date" type="date" name="enddate"></div>';
                // alert(custdate);
                $("#datatypetab1").append(custdate);
            }




        });

        //end dataype customize date




        $("#activitiesopt").change(function() {
            var activitiesopt = $("#activitiesopt").val();
            if (activitiesopt == '1') {

                $(".activtab1").remove();
                $(".activtab2").remove();
                $(".activtab3").remove();

            } else if (activitiesopt == '2') {

                var activtab1 =
                    '<div class="form-group activtab1 "><select name="activitiesopt2" id="activitiesopt2" class="form-control"> <option value="1">Activities</option><option value="2">Task</option><option value="3">Meeting </option></select></div>';
                $(".activtab2").remove();
                $(".activtab3").remove();
                $("#activtab").append(activtab1);
            } else if (activitiesopt == '3') {

                var activtab2 =
                    '<div class="form-group activtab2 "><select name="activitesdue" id="activitesdue" class="form-control"> <option value="1">Today</option><option value="2">Tomorrow</option><option value="3">Next 7 days </option></select></div>';
                $(".activtab3").remove();
                $(".activtab1").remove();
                $("#activtab").append(activtab2);
            } else if (activitiesopt == '4') {

                var activtab3 =
                    '<div class="form-group activtab3 "><select name="withoutactivites" id="withoutactivites" class="form-control"> <option value="1">Today</option><option value="2">This week</option><option value="3">This month</option></select></div>';
                $(".activtab1").remove();
                $(".activtab2").remove();
                $("#activtab").append(activtab3);
            }

        });


    });
</script>

<script type="text/javascript">
    $('#apply').click(function() {
        var button = '<button class="btn pull-left" >Save Filter</button>';
        //$( "#savebutton" ).append(button);


    });
</script>
<script type="text/javascript">
     $(function () {
        $("#cdsortable").sortable();
         
      
    });
</script>
<script>
$(document).ready(function() {
$('.dealstage').on('change', function() {
var category_id = this.value;
// alert(category_id);
$.ajax({
type:"GET",
url: "{{url('/fetch-stages')}}/"+category_id,


success: function(response){
  // console.log(response);
$(".stages").html(response);
}
});
});
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $("#compName").select2( {
       placeholder: "Select a state",
       data:<?php  echo json_encode($data['company_names']) ;?>,
     
        
    });
    $("#compName").on('change',function(){
        var compN=$('#compName').val();

         var  data1= <?php  echo json_encode($data['company_names']) ?>;
         // console.log(data1);

       // var opt=data1.'0'.filter( record => record.name === compN);
    var result=data1.filter(obj=> obj.text == compN);
    console.log(result['0']['name']);
    $('#accounnt_id').val(result['0']['name']);
      
    });
});
</script>