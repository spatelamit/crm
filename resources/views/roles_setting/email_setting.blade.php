@include('header')
<div class="content-wrapper">


    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Email Setting </h4>
            <p class="font-weight-normal mb-2 text-muted"> Add Email template </p>
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <button type="button" class="btn btn-info font-weight-bold" data-animation="slideInRight"
                    data-toggle="modal" data-target="#exampleModalLong-1"><i class="icon-speech-bubble"></i>
                    Add Email template </button>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Email Template List </h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="default-datatable" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Email id</th>
                                    <th> Email Auth key </th>
                                    <th>Created Date</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>CEO</td>
                                    <td>demo@example.com</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <button type="button" class="btn btn-info"
                                                style="float: none; margin: 5px;"><span
                                                    class="fa fa-pencil"></span></button>
                                            <button type="button" class="btn btn-danger"
                                                style="float: none; margin: 5px;"><span
                                                    class="fa fa-trash"></span></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->

        <!-- End col -->
    </div>
</div>
<div class="modal fade come-from-modal right" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1"> Add Emailid with Authkey </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-10">
                    <label>Email Address:</label>
                    <input type="email" name="emailid" class="form-control bg_input"
                        placeholder="Enter your Email Address" required="">
                </div>
                <div class="form-group mb-10">
                    <label>Email Auth Key:</label>
                    <input type="text" placeholder="Enter your Email Authkey" name="authKey"
                        class="form-control bg_input " required="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Ok</button>
            </div>
        </div>
    </div>
</div>
@include('footer')
