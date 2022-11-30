@include('header')
   
 
 
 
   
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

<div class="row">

      <div class="col-md-3">
       <div class="form-group">
       <label for="stages">Select Stages</label>
        <select class="form-control" name="pipeline" id="pipeline">
          <option >Select stages</option>
           <option value="0">Default Pipeline </option>
            @forelse($data['pipeline'] as $pipeline)
             <option value="{{$pipeline->id}}">{{$pipeline->pipeline_name}}</option>
             @empty
             @endforelse
        </select>
        </div>
      </div>

</div>

<div class="contentbar" >
   <div class="row" id="deal_ajax"> 

   </div>
</div>
  



</div>




 @include('footer')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <script type="text/javascript">
   $( "#pipeline" ).on( "change", function(e) {

       var pipeline=$('#pipeline').val();
       
       // alert(mod_id);
       $.ajax({
        type: "get",
      
        url: 'deal-pipe-ajax/'+pipeline,

      
        success: function (response) {

        
          $("#deal_ajax").html(response);
         
         
        }
      });
   
    });

               
                     
 </script>
 
