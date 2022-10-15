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
                    <h5 class="card-title">Roles List </h5>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="roles" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Roles Name</th>
                                    <th>Reporting To</th>
                                    <th> Description</th>
                                    <!--  <th>Permission Type</th> -->
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                        <tr>
                                            <td class="details-control"></td>
                                            <td> <a href=""></a></td>
                                            <td></td>
                                            <td></td>

                                            <td>

                                                <div class="btn-group btn-group-sm" style="float: none;">


                                                    <a class="btn btn-info mr-2"
                                                        href="{{ url('/edit-role', ) }}"><span
                                                            class="fa fa-pencil"
                                                            style="float: none; margin: 5px;"></span> </a>
                                                    <a class="btn btn-danger"
                                                        onclick="deletedata('')"> <span
                                                            class="fa fa-trash"
                                                            style="float: none; margin: 5px;"></span> </a>


                                                </div>



                                            </td>
                                        </tr>
                                  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>




@include('footer')