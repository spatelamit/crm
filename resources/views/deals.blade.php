@include('header')
   <script src="https://themesbox.in/admin-templates/soyuz/html/light-vertical/assets/js/jquery.min.js"></script>
 <link href="https://themesbox.in/admin-templates/soyuz/html/light-vertical/assets/plugins/dragula/dragula.min.css" rel="stylesheet">
 <script src="https://themesbox.in/admin-templates/soyuz/html/light-vertical/assets/plugins/dragula/dragula.min.js"></script>
 
   
<style>
 .m-b-20 {
  margin-bottom: 20px;
}

.btn-primary-rgba {
  background-color: rgba(80, 111, 228, 0.1);
  border: none;
  color: #506fe4;
}

.btn-primary-rgba:hover {
  background-color: #506fe4;
  border: none;
  color: #ffffff;
}

.btn-primary-rgba:focus {
  background-color: #506fe4;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #a8b8f2;
}

.btn-secondary-rgba {
  background-color: rgba(150, 163, 182, 0.1);
  border: none;
  color: #96a3b6;
}

.btn-secondary-rgba:hover {
  background-color: #96a3b6;
  border: none;
  color: #ffffff;
}

.btn-secondary-rgba:focus {
  background-color: #96a3b6;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #a5b0c0;
}

.btn-success-rgba {
  background-color: rgba(67, 209, 135, 0.1);
  border: none;
  color: #43d187;
}

.btn-success-rgba:hover {
  background-color: #43d187;
  border: none;
  color: #ffffff;
}

.btn-success-rgba:focus {
  background-color: #43d187;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #95e5bb;
}

.btn-danger-rgba {
  background-color: rgba(249, 97, 109, 0.1);
  border: none;
  color: #f9616d;
}

.btn-danger-rgba:hover {
  background-color: #f9616d;
  border: none;
  color: #ffffff;
}

.btn-danger-rgba:focus {
  background-color: #f9616d;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #fdc3c8;
}

.btn-warning-rgba {
  background-color: rgba(247, 187, 77, 0.1);
  border: none;
  color: #f7bb4d;
}

.btn-warning-rgba:hover {
  background-color: #f7bb4d;
  border: none;
  color: #ffffff;
}

.btn-warning-rgba:focus {
  background-color: #f7bb4d;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #fbe0af;
}

.btn-info-rgba {
  background-color: rgba(61, 155, 251, 0.1);
  border: none;
  color: #3d9bfb;
}

.btn-info-rgba:hover {
  background-color: #3d9bfb;
  border: none;
  color: #ffffff;
}

.btn-info-rgba:focus {
  background-color: #3d9bfb;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #a1cffd;
}

.btn-light-rgba {
  background-color: rgba(242, 243, 247, 0.1);
  border: none;
  color: #8A98AC;
}

.btn-light-rgba:hover {
  background-color: #f2f3f7;
  border: none;
  color: #ffffff;
}

.btn-light-rgba:focus {
  background-color: #f2f3f7;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #fbfcfd;
}

.btn-dark-rgba {
  background-color: rgba(20, 29, 70, 0.1);
  border: none;
  color: #141d46;
}

.btn-dark-rgba:hover {
  background-color: #141d46;
  border: none;
  color: #ffffff;
}

.btn-dark-rgba:focus {
  background-color: #141d46;
  border: none;
  color: #ffffff;
  box-shadow: 0 0 0 0.2rem #2b3e95;
}
 
.bg-primary-rgba {
  background-color: rgba(80, 111, 228, 0.1) !important;
}

.bg-secondary-rgba {
  background-color: rgba(150, 163, 182, 0.1) !important;
}

.bg-success-rgba {
  background-color: rgba(67, 209, 135, 0.1) !important;
}

.bg-danger-rgba {
  background-color: rgba(249, 97, 109, 0.1) !important;
}

.bg-warning-rgba {
  background-color: rgba(247, 187, 77, 0.1) !important;
}

.bg-info-rgba {
  background-color: rgba(61, 155, 251, 0.1) !important;
}

.bg-light-rgba {
  background-color: rgba(242, 243, 247, 0.1) !important;
}

.bg-dark-rgba {
  background-color: rgba(20, 29, 70, 0.1) !important;
}

.kanban-menu {
  text-align: right;
}

.kanban-users {
  text-align: right;
}

.avatar-group {
  display: inline-flex;
}
.avatar-group .avatar {
  position: relative;
  display: inline-block;
  width: 30px;
  height: 30px;
  font-size: 1rem;
  margin-left: -0.8rem;
  transition: transform 0.2s;
}
.avatar-group .avatar img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  border: 2px solid #ffffff;
}
.avatar-group .avatar:hover {
  -webkit-mask-image: none;
  mask-image: none;
  z-index: 1;
  transform: scale(1.1);
}

 
  
  </style>
  
  
  
  
  
  
  
  
<div class="content-wrapper">




<div class="contentbar">
                <!-- Start row -->
                <div class="row"> 
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">New Lead</h5>
                            </div>
                            <div class="card-body">
                                <div id="kanban-board-one">
                                    <div class="card bg-primary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Leong Nan</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                    
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
     <div class="dropdown-menu dropdown-menu-right">                        
    <a class="dropdown-item"> <span class="icon-briefcase text-warning"></span>Add meeting </a>
    <a class="dropdown-item"><span class="icon-briefcase"></span>Make a Deal </a>
    <a class="dropdown-item"><span class="icon-pushpin text-danger"></span>Add task </a>
    <a class="dropdown-item"><span class="icon-trash text-info"></span> Delete</a>
    <a class="dropdown-item"><span class="icon-spell-check text-warning"></span> Notes </a> 
    <a class="dropdown-item"><span class="icon-clock text-danger" aria-hidden="true"></span> Edit Detail </a>
    <a class="dropdown-item"><span class="icon-smartphone text-info"></span> Send Email </a>
	<a class="dropdown-item"><span class="icon-layers text-danger"></span> Clone</a>
                            </div>                          
                          </div>
        
                        </div>
                                                    
                                                        <div class="dropdown">
                                                            <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton1">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Web Development</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$259</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-primary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">David Nephew</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton2">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Digital Marketing</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$589</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Leads</button>
                            </div>
                        </div>
                    </div> 
                    <!-- End col --> 
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Scheduled Appointment</h5>
                            </div>
                            <div class="card-body">
                                <div id="kanban-board-two">
                                    <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Brad Lorem</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton3">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">App Development</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$315</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Shivay Om</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton4">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">API Integration</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$25</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Liva Longaria</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton5">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Web Development</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$259</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-success-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Enam Singh</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-success p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton6">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Page Development</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$450</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Appointment</button>
                            </div>
                        </div>
                    </div> 
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Sent Quote</h5>
                            </div>
                            <div class="card-body">
                                <div id="kanban-board-three">
                                    <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Jency Raghav</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-warning p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton7">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Social Marketing</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$29</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Sri Narayan</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-warning p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton8">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Web Development</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$879</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-warning-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Sandy Cox</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-warning p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton9">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Brochure Design</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$298</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <button type="button" class="btn btn-warning-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Quote</button>
                            </div>
                        </div>
                    </div> 
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Project in Pipeline</h5>
                            </div>
                            <div class="card-body">
                                <div id="kanban-board-four">
                                    <div class="card bg-secondary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0">Ramesh Ram</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu">
                                                        <div class="dropdown">
                                                            <button class="btn btn-link text-secondary p-0 m-0 border-0 l-h-20 font-16" type="button" id="KanbanBoardButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="KanbanBoardButton10">
                                                                <a class="dropdown-item" href="#"><i class="feather icon-refresh-ccw mr-2"></i>Sync</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-edit-2 mr-2"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="feather icon-trash mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Web Development</span>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="kanban-users">
                                                        <div class="avatar-group">
                                                            <h5 class="mb-0">$569</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                                <button type="button" class="btn btn-secondary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Project</button>
                            </div>
                        </div>
                    </div> 
                    <!-- End col -->                  
                </div>
                <!-- End row --> 
            </div>




            
    





</div>

   <script src="https://themesbox.in/admin-templates/soyuz/html/light-vertical/assets/js/custom/custom-crm-lead.js"></script>

 @include('footer')