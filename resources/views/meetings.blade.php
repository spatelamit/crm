@include('header')
<div class="content-wrapper">


    <div class="row mb-3">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Meetings </h4>

        </div>

        <div class="col-sm-4 mb-2 mb-xl-0">
            <a href="{{url('add-meetings')}}" class="btn btn-info">AddMeeting </a>
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

                                        <td><a href="{{url('editmeeting/'.$key1->id)}}">{{ $key1->title }} </a></td>

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
                                        <td><a href="{{ url('upload/' .$key1->attachments) }}" class="btn btn-info" target="_blank">Attachments
                                            </a></td>
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

    </div>

</div>

@include('footer')
