@include('header')


<div class="content-wrapper">

<div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark"> Welcome to Your Dashboard. Let's get Started </h4>
              <p class="font-weight-normal mb-2 text-muted">User Name : Ashish panwar</p>
            </div>
          </div>



<div class="row mt-3">

<div class="col-md-12">
<div class="Started_box">
<ul class="row">



<li class="col-md-3">
<div class="card border-none">
<div class="card-body bg_colo_s1">
<div class="Started_box_to ">
<a href="{{url('add-role')}}">

<div class="img_ashish"> <img src="assets/img/role.png" /> </div>

<h4> Add one or more roles <br />( Open Positions ) </h4>

<span> Add a new Role </span>
</a>
</div>
</div>
</div>

</li>


<li class="col-md-3">
<div class="card border-none">
<div class="card-body bg_colo_s2">
<div class="Started_box_to ">
<a href="{{url('teams')}}">
<div class="img_ashish"> <img src="assets/img/Invite-icon.png" /> </div>
<h4> Invite Your <br />( Coworkers & team members )</h4>

<span> Invite Members </span>
</a>
</div>
</div>
</div>
</li>



<li class="col-md-3">
<div class="card border-none">
<div class="card-body bg_colo_s3">
<div class="Started_box_to ">
<a href="{{url('add-leads')}}">
<div class="img_ashish"> <img src="assets/img/Add_lead.png" /> </div>
<h4> Add a lead <br />( Potential Candidate ) </h4>

<span> Add a lead </span>
</a>
</div>
</div>
</div>
</li>


</ul>
</div>
</div>

</div>
































</div>

 @include('footer')
