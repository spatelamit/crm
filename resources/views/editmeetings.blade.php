@include('header')
<div class="content-wrapper">
    <div class="row">

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Meetings Details</h3>
                </div>
                <div class="card-body">
                    <h3> Meetings Title: {{ $edit['meeting']->title }}&nbsp; &nbsp;&nbsp; &nbsp;  </h3>





                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Meetings Dates</h3>
                </div>
                <div class="card-body">
                    <h3> Meetings Start Date: {{ $edit['meeting']->start_date }}&nbsp; &nbsp;&nbsp; &nbsp;Meetings Ends
                        Date: {{ $edit['meeting']->end_date }}</h3>

                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                 <h3> Comment..</h3>
                </div>
                <div class="card-body" data-spy="scroll">





                                @foreach ($edit['notes'] as $notes)
                                    <ul class="list-group list-group-flush">

                                        <li class="list-group-item"><i class="fa fa-comments-o"></i>{{ $notes->note_des }}  &nbsp; &nbsp;&nbsp; &nbsp;<i class="fa fa-clock-o"></i> {{ $notes->creation_time }}&nbsp; &nbsp;&nbsp; &nbsp; <i class="fa fa-user-circle"></i>{{ $notes->username }} </li>
                                    </ul>
                                @endforeach





                </div>
                <div class="card-header">
                    <h2> Nots..</h2>
                </div>

                <form method="POST" action="{{ url('addnots') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="taskid" class="form-control" value="{{$edit['meeting']->id }}">
                    </div>
                    <div class="form-group">

                        <input type="hidden" name="moduleid" class="form-control" value="11">
                    </div>

                    <div class="form-group">
                        <label>Write Notes..</label>
                        <textarea class="form-control" name="note_des">Enter text here...</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info font-weight-bold"> Submit </button>
                    </div>

                </form>
            </div>


        </div>


    </div>
</div>
@include('footer')
