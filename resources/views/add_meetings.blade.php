@include('header')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"><i class="fa fa-file-text-o menu-icon"></i> Add Meeting </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('create-meeting') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stage_name">Title: </label>
                                    <input class="form-control" name="title">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">Description: </label>
                                    <input class="form-control" name="description">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">StartDate: </label>
                                    {{-- <input class="form-control" type="text" id="duedate" name="duedate"> --}}
                                    <input class="form-control" type="text" id="startdate"  name="start_date">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">EndDate: </label>
                                    {{-- <input class="form-control" type="text" id="duedate" name="duedate"> --}}
                                    <input class="form-control" type="text" id="enddate"  name="end_date">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">Location: </label>
                                    <input class="form-control" name="location">
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
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="">Status: </label>
                                    <select class="form-control"  name="status">
                                        <option>select</option>
                                        <option value="0">Pending</option>
                                        <option value="1">complete</option>

                                    </select>
                                </div>
                            </div>

                            {{-- <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">RelatedTo: </label>
                                    <input class="form-control" name="related_to">
                                </div>
                            </div> --}}
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">RelatedTo:</label>
                                    <select  name="related_to"
                                    class="form-control bg_input" id="compName1" >


                                         <option value="">Selecte Company name</option>
                                </select>
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">Attachments: </label>
                                    <input type="file" class="form-control" name="attachments">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="stage_name">MeetingUrl: </label>
                                    {{-- <input class="form-control" type="text" id="duedate" name="duedate"> --}}
                                    <input class="form-control" type="text"   name="meeting_url">
                                </div>
                            </div>
                            <div class=" col-md-4" id="container">
                                <div class="form-group">
                                    <label for="">MeetingPlateform: </label>
                                    <select class="form-control"  name="meeting_plateform">
                                        <option>select</option>
                                        <option value="googlemeet">GoogleMeet</option>
                                        <option value="zoommeet">ZoomMeet</option>
                                        <option value="skype">Skype</option>
                                        <option value="microsoftteam">MicrosoftTeam</option>
                                        <option value="other">Other</option>

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


<script>
     $( document ).ready(function() {
     $('#startdate').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
});
    </script>

<script>
    $( document ).ready(function() {
    $('#enddate').daterangepicker({
       singleDatePicker: true,
       autoApply: true,
       locale: {
           format: 'YYYY-MM-DD'
       }
   });

   $("#compName1").select2( {
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


