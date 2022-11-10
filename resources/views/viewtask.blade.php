@include('header')


<div class="row">
    <div class="col-md-12 " id="bid_d">


        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Task List </h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="display table ">
                        <thead>
                            <tr>

                               <th>S.no.</th>
                               <th>Title</th>
                               <th>Description</th>
                               {{-- <th>StartDate</th> --}}
                               {{-- <th>EndDate</th> --}}
                               <th>DueDate</th>
                               <th>SenderID</th>
                               <th>RecieverID</th>
                               {{-- <th>RelatedTo</th> --}}
                               <th>Priority</th>
                               <th>Status</th>
                               <th>ModifyDate</th>
                               <th>CreationDate</th>
                            </tr>

                        </thead>
                        <tbody>


                            @if ($result != null)
                                @foreach ($result as $key1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td><a href="{{url('edittask/'.$key1->id)}}">{{ $key1->subject }} </a></td>

                                        <td>{{ $key1->description }}</td>
                                        {{-- <td>{{ $key1->start_date }}</td>
                                        <td>{{ $key1->end_date }}</td> --}}
                                        <td>{{ $key1->due_date }}</td>
                                        <td>{{ $key1->sender_user }}</td>
                                        <td>{{ $key1->reciever_user }}</td>
                                        {{-- <td>{{ $key1->related_to }}</td> --}}
                                        <td>
                                        @if ($key1->priority == 0)
                                        <span>High</span>
                                        @elseif($key1->priority == 1)
                                        <span>Low</span>
                                        @elseif($key1->priority == 2)
                                        <span>Medium</span>
                                        </td>
                                        @endif
                                        <td>
                                        @if ($key1->status == 0)
                                        <span>JustArrive</span>
                                        @elseif($key1->status == 1)
                                        <span>Pending</span>
                                        @elseif($key1->status == 2)
                                        <span>Compelete</span>
                                        </td>
                                        @endif
                                        </td>

                                        <td>{{ $key1->modify_date}}</td>
                                        <td>{{ $key1->creation_date }}</td>

                                    </tr>
                                @endforeach
                            @endif

                        </tbody>

                    </table>
                    {!! $result->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>

</div>

@include('footer')
