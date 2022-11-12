@include('header')
<div class="content-wrapper">
    <div class="row">

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3> Updates Task Details</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('taskupdate') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{ $edit['task']->id }}">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="subject"
                                value="{{ $edit['task']->subject }}">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description"
                                value="{{ $edit['task']->description }}">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status">
                                <option <?php if ($edit['task']->status == 0) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                } ?> value="0">JustArrive</option>
                                <option <?php if ($edit['task']->status == 1) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                } ?> value="1">Pending</option>
                                <option <?php if ($edit['task']->status == 2) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                } ?> value="2">Complete</option>
                            </select>

                            <label>Priority</label>
                            <select name="priority">
                                <option <?php if ($edit['task']->priority == 0) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                } ?> value="0">High</option>
                                <option <?php if ($edit['task']->priority == 1) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                } ?> value="1">Low</option>
                                <option <?php if ($edit['task']->priority == 2) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                } ?> value="2">Medium</option>
                            </select>

                            <label>Due_Date</label>
                            <input type="date" name="due_date" value="{{ $edit['task']->due_date }}">

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info font-weight-bold"> Update Task </button>
                        </div>

                    </form>



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
                        <input type="hidden" name="taskid" class="form-control" value="{{ $edit['task']->id }}">
                    </div>
                    <div class="form-group">

                        <input type="hidden" name="moduleid" class="form-control" value="11">
                    </div>

                    <div class="form-group">
                        <label>Write Notes..</label>
                        <textarea class="form-control" name="note_des" placeholder="Enter text here..."></textarea>
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
