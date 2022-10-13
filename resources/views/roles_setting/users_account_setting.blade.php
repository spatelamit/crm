@include('header')
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> User Account Setting </h4>
           
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <button type="button" class="btn btn-info font-weight-bold" data-animation="slideInRight"
                    data-toggle="modal" data-target="#addusers"><i class="icon-speech-bubble"></i>
                    Add Account Setting </button>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title"> All Account Setting </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr No </th>
                                    <th>Full Name </th>
                                    <th>Email </th>
                                    <th>Contact </th>
                                    <th> Role </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['users'] as $val)
                                    <tr id="{{ $val->id }}">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $val->full_name }}</td>
                                        <td>{{ $val->email }}</td>
                                        <td>{{ $val->contact }}</td>
                                        <td>{{ $val->role_name }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                <button type="button" class="btn btn-info"
                                                    style="float: none; margin: 5px;"><a data-toggle="modal"
                                                        data-target="#edituser{{ $val->id }}"><span
                                                            class="fa fa-pencil"></span></a></button>
                                                <button type="button" class="btn btn-danger"
                                                    style="float: none; margin: 5px;"><a
                                                        onclick="deleteuser('{{ $val->id }}')"><span
                                                            class="fa fa-trash"></span></a></button>
                                                <button type="button" class=" btn btn-sm  btn-warning"
                                                    style="float: none; margin: 5px;"><span
                                                        class="fa fa-envelope"></span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade come-from-modal right" id="edituser{{ $val->id }}"
                                        tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog  slideInRight  animated" role="document">
                                            <div class="modal-content">
                                                <form method="post" action="{{ url('update-user') }}"
                                                    autocomplete="nope">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $val->id }}">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle-1"> Edit User
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"> <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group mb-10">
                                                            <label for="stage_name">Full Name: </label>
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Enter your name" id="add_full_name"
                                                                name="full_name" value="{{ $val->full_name }}"
                                                                required="">
                                                        </div>
                                                        <div class="form-group mb-10">
                                                            <label for="username"> Username: </label>
                                                            <input type="text" class="form-control bg_input"
                                                                minlength="5" placeholder="Enter your username"
                                                                id="username" name="username"
                                                                value="{{ $val->username }}" required=""
                                                                title="minimum 5 characters needed" readonly="">
                                                        </div>
                                                        <div class="form-group mb-10">
                                                            <label for="stage_color"> Email: </label>
                                                            <input type="email" class="form-control bg_input"
                                                                value="{{ $val->email }}"
                                                                placeholder="Enter your email" name="email"
                                                                id="add_email" readonly="">
                                                        </div>
                                                        <div class="form-group mb-10">
                                                            <label for="stage_name"> Contact: </label>
                                                            <input type="text" maxlength="10"
                                                                pattern="[6-9]{1}[0-9]{9}"
                                                                title="Phone number with 6-9 and remaing 9 digit with 0-9"
                                                                class="form-control" value="{{ $val->contact }}"
                                                                placeholder="Enter your contact" name="contact"
                                                                id="add_contact" required="">
                                                        </div>
                                                        <!--  <div class="form-group mb-10">
                                              <label for="stage_name"> Password: </label>
                                              <input type="text" class="form-control bg_input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter your Password" name="password" required="">
                                            </div> -->
                                                        <div class="form-group mb-10">
                                                            <label for="stage_name"> Date Of Birth: </label>
                                                            <input type="text" data-date-format="YYYY MMMM DD"
                                                                class="form-control" value="{{ $val->dob }}"
                                                                placeholder="Enter your date of birth" name="dob"
                                                                id="add_dob">
                                                        </div>
                                                        <div class="form-group mb-10">
                                                            <label for="stage_name"> Role: </label>
                                                            <select class="form-control bg_input" name="user_type"
                                                                required="">

                                                                <option value="">Select Role</option>
                                                                @foreach ($data['roles'] as $value)
                                                                    {
                                                                    @if ($value->id != session()->get('role_id'))
                                                                        @if (in_array($value->id, $data['recursiveroles']))
                                                                            {?>


                                                                            <option value="{{ $value->id }}"
                                                                                @if ($value->id == $val->role_id) selected="selected" @endif>
                                                                                {{ $value->role_name }} </option>
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade come-from-modal right" id="addusers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  slideInRight  animated" role="document">
            <div class="modal-content">
                <form method="post" action="{{ url('add-user') }}" autocomplete="nope">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title"> Add New Team Member </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-10">
                            <label for="stage_name">Full Name: </label>
                            <input type="text" class="form-control bg_input" placeholder="Enter your name"
                                name="full_name" required="">
                        </div>
                        <div class="form-group mb-10">
                            <label for="username"> Username: </label>
                            <input type="text" class="form-control bg_input" minlength="5"
                                placeholder="Enter your username" name="username" required=""
                                title="minimum 5 characters needed">
                        </div>
                        <div class="form-group mb-10">
                            <label for="stage_color"> Email: </label>
                            <input type="email" class="form-control bg_input" placeholder="Enter your email"
                                name="email" id="add_email">
                        </div>
                        <div class="form-group mb-10">
                            <label for="stage_name"> Contact: </label>
                            <input type="text" maxlength="10" pattern="[6-9]{1}[0-9]{9}"
                                title="Phone number with 6-9 and remaing 9 digit with 0-9" class="form-control"
                                placeholder="Enter your contact" name="contact" required="">
                        </div>
                        <div class="form-group mb-10">
                            <label for="stage_name"> Password: </label>
                            <input type="text" class="form-control bg_input"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                placeholder="Enter your Password" name="password" required="">
                        </div>
                        <div class="form-group mb-10">
                            <label for="stage_name"> Date Of Birth: </label>
                            <input type="text" data-date-format="YYYY MMMM DD" class="form-control"
                                placeholder="Enter your date of birth" name="dob" id="add_dob">
                        </div>
                        <div class="form-group mb-10">
                            <label for="stage_name"> Role: </label>
                            <select class="form-control bg_input" name="role_id" required="">

                                <option value="">Select Role</option>
                                @foreach ($data['roles'] as $value)
                                    {
                                    @if ($value->id != session()->get('role_id'))
                                        @if (in_array($value->id, $data['recursiveroles']))
                                            {?>


                                            <option value="{{ $value->id }}"
                                                @if ($value->id == $val->role_id) selected="selected" @endif>
                                                {{ $value->role_name }} </option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
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
    <!-- End col -->
    <!-- Start col -->

    <!-- End col -->

</div>

@include('footer')
<script type="text/javascript">
    function deleteuser(id) {
        alert(id);

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
                    type: "GET",
                    url: "{{ url('/delete-user') }}/" + id,

                    success: function() {

                        swal("Deleted !!", " User has been deleted !!", "success")

                        $("#" + id).remove();
                    },
                });


            } else {
                swal("Deleted !!", "some error occured in delete User!!", "error")
            }

        });

    }
</script>
