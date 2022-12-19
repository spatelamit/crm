 @include('header')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <link href="//cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet">
 <link href="//cdn.syncfusion.com/ej2/ej2-inputs/styles/material.css" rel="stylesheet">
 <link href="//cdn.syncfusion.com/ej2/ej2-navigations/styles/material.css" rel="stylesheet">
 <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>


 <style>
    #tree {
         margin: 0px;
         background-color: #e8eff4;
         position: relative;
     }
     
#treeparent {
  position: absolute;
  width: 100%;
  z-index: 99;
}

     .Permission_box_li {
         background-color: #2E92B8;
     }
     
     .Permission_box_li a {
  color: #fff;
}

     .Permission_box_li li {
         width: 100%;
         padding: 10px;
         border-bottom: 1px solid #fff;
     }
 </style>


 <?php
 $FeaturesPerm = $data['role_data'][0]->features_permission;
 $FeaturesPerm = explode(',', $FeaturesPerm);

 //print_r($FeaturesPerm );
 //print_r($AllFeatures);

 $naya_array = [];
 foreach ($data['allfeatures'] as $key => $value) {
     if (in_array($value->id, $FeaturesPerm)) {
         $naya_array[] = ['id' => $value->id, 'module_id' => $value->module_id, 'features_name' => $value->features_name, 'status' => 1];
     } else {
         $naya_array[] = ['id' => $value->id, 'module_id' => $value->module_id, 'features_name' => $value->features_name, 'status' => 0];
     }
 }
 // print_r($naya_array);
 ?>




 <div class="content-wrapper">


     <div class="row">
         <div class="col-sm-12 mb-4 mb-xl-0">
             <h4 class="font-weight-bold text-dark"> Edit Role </h4>
             <p class="font-weight-normal mb-2 text-muted"> Edit Role </p>
         </div>

     </div>


     <div class="row">
         <div class="col-md-12 grid-margin stretch-card ">


             <div class="card">
                 <div class="card-body">
                     <div id="box1-delete">
                         <div>
                             <form action="{{ url('update-role') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6" >
                                         <div class="form-group">
                                             <label for="usr">Role Name <font style="color:red;">*</font></label>
                                             <input type="hidden" name="role_id"
                                                 value="{{ $data['role_data'][0]->id }}">
                                             <input type="text" class="form-control fieldname" name="role_name"
                                                 placeholder="Name" value="{{ $data['role_data'][0]->role_name }}"
                                                 required="">
                                         </div>
                                     </div>
                                     <div class=" col-md-6" id="container">
                                         <div class="form-group">
                                             <label for="stage_name"> Reporting To: </label>
                                             <input class="form-control" type="hidden" name="reporting_to"
                                                 id="reporting_to" value="{{ $data['role_data'][0]->reporting_to }}">
                                             <div id="treeparent">
                                                 <div id="tree"></div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class=" col-md-12">
                                         <div class="form-group">
                                             <label for="usr"> Description <font style="color:red;">*</font>
                                                 </label>
                                             <textarea name="role_des" placeholder="Description" class="form-control ">{{ $data['role_data'][0]->role_des }}</textarea>
                                         </div>
                                     </div>
                                     <div class=" col-md-12 mt-4 input_my"> </div>
                                     <div class="col-md-12">
                                         <div class="Permission_box">
                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <h5 class="mt-3"> Permission type </h5>
                                                 </div>
                                                 <div class="col-md-2">
                                                     <div class="Permission_box_li">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                                                             
                                                        <span class="menu-title">  CRM Setting </span>
                                                             <i class="menu-arrow"></i>
                                                         </a>
                                                         <div class="collapse" id="ui-basic1">
                                                                 
                                                            <ul class="nav flex-column sub-menu">
                                                                <li><a data-toggle="tab" href="#users">Users</a></li>
                                                                <li><a data-toggle="tab" href="#RoleSettings">Roles Settings</a></li>
                                                                <li ><a data-toggle="tab"
                                                                         href="#Pipe_stage">Pipeline and Stage</a>
                                                                </li>
                                                                 <li ><a data-toggle="tab"
                                                                         href="#SmsSetting">SMS</a>
                                                                </li>
                                                                 <li ><a data-toggle="tab"
                                                                         href="#EmailSetting">E-mail</a>
                                                                </li>
                                                                 <li ><a data-toggle="tab"
                                                                         href="#VoiceSetting">Voice</a>
                                                                </li>
                                                             </ul>
                                                                
                                                         </div>
                                                     </li>
                                                         
                                                         
                                                        
                                                         <li ><a data-toggle="tab"
                                                                 href="#Leads">Leads</a>
                                                             </li>
                                                             <li ><a data-toggle="tab"
                                                                 href="#Deals">Deals</a>
                                                             </li>
                                                             <li ><a data-toggle="tab"
                                                                 href="#Accounts">Accounts</a>
                                                             </li>
                                                              <li ><a data-toggle="tab"
                                                                 href="#Tasks">Tasks</a>
                                                             </li>
                                                             <li ><a data-toggle="tab"
                                                                 href="#Meeting">Meeting</a>
                                                             </li>
                                                         <li><a data-toggle="tab" href="#Mailer">Mailer</a></li>
                                                        
                                                         </li>
                                                     </ul>
                                                     </div>
                                                 </div>
                                                 <input type="hidden" id="add_permission" name="features_permission">
                                                 <div class="col-md-10">
                                                     <div class="tab-content Permission_box_tab">
                                                         <div id="Leads" class="tab-pane fade in active">
                                                             <div class="col-md-12">
                                                                 <h2> Leads </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '8')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div id="Deals" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Deals </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '9')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <!-- Start Pipeline and stages -->
                                                         <div id="Pipe_stage" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Pipeline and stages </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '5')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <!-- End pipeline and stages -->
                                                          <!-- Start SMS -->
                                                         <div id="SmsSetting" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> SMS </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '13')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <!-- End SMS -->

                                                          <!-- Start EmailSetting -->
                                                         <div id="EmailSetting" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Email </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '14')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <!-- End EmailSetting -->
                                                         <!-- Start VoiceSetting -->
                                                         <div id="VoiceSetting" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Voice </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '15')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <!-- End VoiceSetting -->
                                                         <div id="Tasks" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Tasks </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '11')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                          <div id="Meeting" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Meeting </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '12')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>

                                                          <div id="Accounts" class="tab-pane fade in ">
                                                             <div class="col-md-12">
                                                                 <h2> Accounts </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row ">
                                                                 <input class="hierarchy-checkbox inPut_1"
                                                                     id="selectAll" type="checkbox">
                                                                 <label class="hierarchy-label inPut_2"> All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '10')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div id="crmSettings"
                                                             class="tab-pane fade hierarchy-node leaf">
                                                             <div class="col-md-12">
                                                                 <h2> CRM Settings </h2>
                                                                 <hr />
                                                             </div>
                                                             <div class="hierarchy-node row">
                                                                 <input id="selectAll"
                                                                     class="hierarchy-checkbox inPut_1"
                                                                     type="checkbox">
                                                                 <label class="hierarchy-label inPut_2">All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '2')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div id="users"
                                                             class="tab-pane fade hierarchy-node leaf">
                                                             <div class="hierarchy-node row">
                                                                 <div class="col-md-12">
                                                                     <h2>Users</h2>
                                                                     <hr />
                                                                 </div>
                                                                 <input id="selectAll"
                                                                     class="hierarchy-checkbox inPut_1"
                                                                     type="checkbox">
                                                                 <label class="hierarchy-label inPut_2">All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '3')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div id="RoleSettings" class="tab-pane fade">
                                                             <div class="hierarchy-node row">
                                                                 <div class="col-md-12">
                                                                     <h2> Role Settings </h2>
                                                                     <hr />
                                                                 </div>
                                                                 <input id="selectAll"
                                                                     class="hierarchy-checkbox inPut_1"
                                                                     type="checkbox">
                                                                 <label class="hierarchy-label inPut_2">All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '4')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div id="Mailer" class="tab-pane fade">
                                                             <div class="hierarchy-node row">
                                                                 <div class="col-md-12">
                                                                     <h2> Mailer </h2>
                                                                     <hr />
                                                                 </div>
                                                                 <input id="selectAll"
                                                                     class="hierarchy-checkbox inPut_1"
                                                                     type="checkbox">
                                                                 <label class="hierarchy-label inPut_2">All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '6')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                         <div id="Universal" class="tab-pane fade">
                                                             <div class="hierarchy-node row">
                                                                 <div class="col-md-12">
                                                                     <h2> Universal </h2>
                                                                     <hr />
                                                                 </div>
                                                                 <input id="selectAll"
                                                                     class="hierarchy-checkbox inPut_1"
                                                                     type="checkbox">
                                                                 <label class="hierarchy-label inPut_2">All</label>
                                                                 @foreach ($naya_array as $value)
                                                                     @if ($value['module_id'] == '7')
                                                                         <div class="hierarchy-node col-md-2 leaf ">
                                                                             <input class="hierarchy-checkbox"
                                                                                 name="permissions[]"
                                                                                 value="{{ $value['id'] }}"
                                                                                 type="checkbox" <?php if($value['status']=='1') {?>
                                                                                 checked="unchecked"<?php } ?>>
                                                                             <label
                                                                                 class="hierarchy-label">{{ $value['features_name'] }}</label>
                                                                         </div>
                                                                     @endif
                                                                 @endforeach
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class=" col-md-4 mt-4">
                                     <button type="submit" class="btn btn-primary" id="add_roles"> Submit </button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>




 </div>








 @include('footer')
 <script>
     var ele = document.getElementById('container');
     if (ele) {
         ele.style.visibility = "visible";
     }
 </script>
 <script>
     $(document).ready(function() {


         $.ajax({


             url: "{{ url('rolestree') }}",
             method: "GET",
             dataType: "json",
             success: function(data) {


                 var tree1 = new ej.navigations.TreeView({
                     fields: {
                         dataSource: data,
                         id: 'id',
                         text: 'role_name',
                         child: 'nodes'
                     },
                     loadOnDemand: false,


                 });

                 tree1.appendTo('#tree');
                 // console.log(tree1);
                 $('.e-list-item').click(function() {
                     var item = document.getElementsByClassName('e-active');

                     if (item[0]) {
                         var reporting_to = item[0].getAttribute('data-uid');
                         console.log(reporting_to);
                         $('#reporting_to').val(reporting_to);

                     } else {
                         console.log('Nothing selected');
                     }
                 });


             }
         });

     });
 </script>
 <script>
     function displayDivDemo(id, elementValue) {
         document.getElementById(id).style.display = elementValue.value == 1 ? 'block' : 'none';
     }
 </script>
 <script>
     $(document).ready(function() {
         $("#add_roles").click(function() {
             var permissionNodeList = document.getElementsByName("permissions[]");


             var permission = [];

             for (var i = 0; i < permissionNodeList.length; i++) {

                 if (permissionNodeList[i].checked) {
                     permission.push(permissionNodeList[i].value);

                 }
                 $('#add_permission').val(permission);

             }


         });

     });
 </script>
