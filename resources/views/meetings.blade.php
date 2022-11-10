@include('header')
<div class="content-wrapper">


    <div class="row mb-3">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Meetings </h4>

        </div>

    </div>







    <div class="row">
        <div class="col-md-12 " id="bid_d">


            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Meeting List </h5>
                </div>

                <div class="card-body">
                    <div class="table-responsive lead_search">
                        <table id="leads" class="display table leads">
                            <thead>
                                <tr>

                                    <th>S.no.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>StartDate</th>
                                    <th>EndDate</th>
                                    <th>Location</th>
                                    <th>MeetingHost</th>
                                    <th>Reciever</th>
                                    <th>Status</th>
                                    <th>RelatedTo</th>
                                    <th>Attachments</th>
                                    <th>ModifyDate</th>
                                    <th>CreationDate</th>
                                 </tr>
                            </thead>
                            <tbody>

                                @if ($result != null)
                                    @foreach ($result as $key1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td><a href="{{url('edittask/'.$key1->id)}}">{{ $key1->title }} </a></td>

                                        <td>{{ $key1->description }}</td>
                                        <td>{{ $key1->start_date }}</td>
                                        <td>{{ $key1->end_date }}</td>
                                        <td>{{ $key1->location }}</td>
                                        <td>{{ $key1->sender_user }}</td>
                                        <td>{{ $key1->reciever_user }}</td>
                                        <td>

                                        @if ($key1->status == 0)
                                        <span>Pending</span>
                                        @elseif($key1->status == 1)
                                        <span>Compelete</span>
                                        @endif
                                        </td>


                                        <td>{{ $key1->related_to }}</td>
                                        <td>{{$key1->attachments}}</td>
                                        <td>{{ $key1->modify_date}}</td>
                                        <td>{{ $key1->creation_date }}</td>

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
                <input type="hidden" name="module_id" value="8">

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


                                <option value="lead_type">Lead Types</option>
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
                                <option value="sectors">Sectors</option>


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

@include('footer')
