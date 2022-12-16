@include('header')
<style>
    .slidingDiv {
        position: absolute;
        padding: 0px;
        margin-top: 10px;
        border: 2px solid #eee;
        bottom: 80px;
    }

    .show_hide {
        display: block;
    }

    .Reminder_btn a {
        border: 2px dotted #ccc;
    }


    .slidingDiv1 {
        position: absolute;
        padding: 0px;
        margin-top: 10px;
        border: 2px solid #eee;
        bottom: 80px;
    }

    .show_hide1 {
        display: block;
    }
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"><i class="fa fa-file-text-o menu-icon"></i> Add Tasks </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('task_add') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="usr">Task Owner <font style="color:red;">*</font></label>
                                    <input type="text" class="form-control fieldname" name=""
                                        value="{{ Session::get('full_name') }}" readonly>

                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">Subject: </label>
                                    <input class="form-control" name="subject">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">Account: </label>
                                    <select  name="account"
                                    class="form-control bg_input" id="compName">


                                         <option value="">Selecte Company name</option>
                                </select>
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">DueDate: </label>
                                    {{-- <input class="form-control" type="text" id="duedate" name="duedate"> --}}
                                    <input class="form-control" type="text" id="duedate"  name="due_date">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="">Status: </label>
                                    <select class="form-control"  name="status">
                                        <option value="0">NotStarted</option>
                                        <option value="1">In Progress</option>
                                        <option value="2">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="">Priority: </label>
                                    <select class="form-control"  name="priority">

                                        <option value="0">High</option>
                                        <option value="1">Lowest</option>
                                        <option value="2">Normal</option>
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
                                                            value="yyyy/mm/dd hh/mm" name="reminder" placeholder="Name"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Notify User </label>
                                                        <select class="form-control"  name="notify">
                                                            <option value="">Notify</option>
                                                            <option value="high">Popup</option>
                                                            <option value="lowest">Email</option>
                                                            <option value="normal">Both</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <label for="stage_name">Add Repeat </label>
                                <div class="Reminder_btn"> <a href="#" class="show_hide1 btn "> <i
                                            class="fa fa-refresh" aria-hidden="true"></i>
                                        Repeat </a> </div>
                                <div class="slidingDiv1" style="display: block;">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for=""> Repeat </label>
                                                        <select class="form-control" name="repeat">
                                                            <option value="">Daily</option>
                                                            <option value="high">Weekly</option>
                                                            <option value="lowest">Monthly</option>
                                                            <option value="normal">Yearly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                name="optionsRadios"
                                                                value="">
                                                            Never <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="optionsRadios"
                                                                        value="">
                                                                    After <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group row">
                                                                <div class="col-md-6"> <input type="number"
                                                                        class="form-control" placeholder=""> </div>
                                                                <div class="col-md-6"> <label class="mt-2"
                                                                        for=""> Times </label> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="optionsRadios"
                                                                        value="">
                                                                    On <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <input class="form-control" type="date"
                                                                    value="yyyy/mm/dd hh/mm" name="taskowner"
                                                                    placeholder="Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="container">
                                <div class="form-group">
                                    <label for="">RecieverId:</label>
                                    <select class="form-control" name="reciever_id">
                                        @foreach ( ($data['meeting_user']) as $reciever )
                                        <option value="{{$reciever->id}}">{{ $reciever->username }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-12 text-right mt-4">
                            <button type="submit" class="btn btn-info font-weight-bold" id=""> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
{{-- <script>
    $("#duedate").daterangepicker({
		    timePicker: false,
		    datePicker:true,
            singleDatePicker: true,

		    locale: {
		         format: 'YYYY-MM-DD'
		    }
		}).on('show.daterangepicker', function(ev, picker) {
		            picker.container.find(".calendar-table").hide();
		});
</script> --}}
<script>
    $( document ).ready(function() {
     $('#duedate').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    $("#compName").select2( {
       placeholder: "Select a state",
       data:<?php  echo json_encode($data['company_names']) ;?>,


    });
});
</script>
<script>
    $(document).ready(function() {
        $(".slidingDiv").hide();
        $(".show_hide").show();
        $('.show_hide').click(function() {
            $(".slidingDiv").slideToggle();
        });

    });
</script>
<script>
    $(document).ready(function() {
        $(".slidingDiv1").hide();
        $(".show_hide1").show();
        $('.show_hide1').click(function() {
            $(".slidingDiv1").slideToggle();
        });

    });
</script>


