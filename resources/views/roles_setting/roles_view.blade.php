@include('header')





<div class="contentbar">

  <div class="col-md-10">
    <div class="title mta-15">
      <h3><span class="icon-users"></span> Roles </h3>
    </div>
  </div>
  
  <div class="col-md-2 text-right"> <a class="btn btn-default new_w btn-icon-fixed" href="{{url('add-role')}}"  > <span class="icon-plus-circle"></span> Create Role </a> </div>
  
  
  <div class="col-md-12">
    <div class="table-responsive mt-3">
      <div class="block">
        <table id="roles" class="table table_as">
          <thead>
            <tr>
              <th  >ID</th>
              <th>Roles Name</th>
              <th>Reporting To</th>
              <th> Description</th>
             <!--  <th>Permission Type</th> -->
              <th>Actions </th>
            </tr>
          </thead>
          <tbody>
          @foreach($data['role_list'] as $value)
          @if($value->reporting_to!= '0')
            <tr>
              <td class="details-control">{{$loop->iteration}}</td>
              <td> <a href="">{{$value->role_name}}</a></td>
              <td>{{$value->parentsName}}</td>
              <td>{{$value->role_des}}</td>
             
              <td><div class="dropdown" style="">
                 <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-ellipsis-v"></span></button>
                  <ul class="dropdown-menu dropdown-left" >
                 
                    <li style="width: 62 px"><a  href="{{url('edit-role',$value->id)}}"><span class=" icon-pencil text-info"></span> Edit</a> </li>
                   
                    <li style="width: 62 px"><a  onclick="deletedata('{{$value->id}}')"> <span class="icon-trash    text-info"></span> Delete  </a> </li>
               
                  </ul>
                </div></td>
            </tr>
            @endif
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>


















 @include('footer')