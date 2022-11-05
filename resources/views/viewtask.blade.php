@include('header')


<div class="row">
    <div class="col-md-12 " id="bid_d">


        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Leads List </h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="leads" class="display table ">
                        <thead>
                            <tr>

                               <th>S.no.</th>
                               <th>Title</th>
                               <th>Description</th>
                               <th>StartDate</th>
                               <th>EndDate</th>
                               <th>Deadline</th>
                               <th>SenderID</th>
                               <th>RecieverID</th>
                               <th>RelatedTo</th>
                               <th>Priority</th>
                               <th>ModifyDate</th>
                               <th>CreationDate</th>
                            </tr>

                        </thead>
                        <tbody>
                            

                            @if ($result != null)
                                @foreach ($result as $key1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $key1->title }}</td>
                                        <td>{{ $key1->description }}</td>
                                        <td>{{ $key1->start_date }}</td>
                                        <td>{{ $key1->end_date }}</td>
                                        <td>{{ $key1->deadline }}</td>
                                        <td>{{ $key1->sender_id }}</td>
                                        <td>{{ $key1->reciever_id }}</td>
                                        <td>{{ $key1->related_to }}</td>
                                        <td>{{ $key1->priority }}</td>
                                        <td>{{ $key1->creation_date }}</td>

                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@include('footer')
