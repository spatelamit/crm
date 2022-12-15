<!DOCTYPE html>
<html lang="en">

<head>
  <title> {{ Config::get('app.title') }} </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- base:css -->
  <link rel="stylesheet" href="{{url('/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{url('/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
  <link rel="stylesheet" href="{{url('/assets/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
  <!-- End plugin css for this page -->
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
  <!-- endinject -->

  <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="{{url('/assets/css/dataTables.css')}}">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" /> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css
"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.localhost"]);
  _paq.push(["setDomains", ["*.localhost"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//127.0.0.1/matomo/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

</head>

<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('')}}">{{ Config::get('app.title') }}</a>
        <a class="navbar-brand brand-logo-mini" href="{{url('')}}">B</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right ">
            <li class="nav-item dropdown d-lg-flex d-none">
                <button type="button" class="btn btn-info font-weight-bold">+ Create New</button>
            </li>
            <li class="nav-item dropdown d-flex mr-4 ">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="icon-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">notification</p>
                  <a class="dropdown-item preview-item">
                      <i class="icon-head"></i> Profile
                  </a>

                  <a class="dropdown-item preview-item" href="{{url('logout')}}">

                      <i class="icon-inbox"></i> Logout
                  </a>
                </div>
              </li>
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="assets_2/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="assets_2/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="assets_2/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div> -->
          </li>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">
                  <i class="icon-head"></i> Profile
              </a>

              <a class="dropdown-item preview-item" href="{{url('logout')}}">

                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <!--<div class="user-profile">
          <div class="user-image">
            <img src="assets_2/images/faces/face28.png">
          </div>
          <div class="user-name">
              Edward Spencer
          </div>
          <div class="user-designation">
              Developer
          </div>
        </div>-->
        <ul class="nav main-menu menu-fixed">
        <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="fa fa-home  menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user_dashboard')}}">
              <i class="icon-pie-graph  menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">  CRM Setting </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('roles')}}">Roles Setting</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('user_account_setting')}}">Users Account Setting</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('sms_settings')}}">SMS Setting</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('email_settings')}}">Email Setting</a></li>
               <!--  <li class="nav-item"><a class="nav-link" href="{{url('forms')}}">Forms</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{url('pipelines_stages')}}">Pipelines & Stages</a></li>
               <!--  <li class="nav-item"><a class="nav-link" href="{{url('')}}">Data Admin</a></li> -->
                {{-- <li class="nav-item"><a class="nav-link" href="{{url('theme_settings')}}">Theme Settings</a></li> --}}
               <!--  <li class="nav-item"><a class="nav-link" href="{{url('modules')}}">Modules </a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('accounts')}}">
              <i class="fa fa-briefcase menu-icon"></i>
              <span class="menu-title">  Accounts </span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="{{url('leads')}}">
              <i class="fa fa-briefcase menu-icon"></i>
              <span class="menu-title"> Leads </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('deals')}}">
              <i class="fa fa-briefcase menu-icon"></i>
              <span class="menu-title">  Deals </span>
            </a>
          </li>
        <!--   <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-filter menu-icon"></i>
              <span class="menu-title"> Universal Filter</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{url('meetings')}}">
              <i class="fa fa-handshake-o menu-icon"></i>
              <span class="menu-title"> Meetings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('tasks')}}">
              <i class="fa fa-file-text-o menu-icon"></i>
              <span class="menu-title"> Tasks</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{url('teams')}}">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title"> Teams</span>
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('user_profile')}}">
              <i class="fa fa-user menu-icon"></i>
              <span class="menu-title"> User Profile</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">

