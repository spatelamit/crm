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
<div class="row mb-3">
        <div class="col-sm-4 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Deals </h4>

        </div>
        <div class="col-sm-8 mb-4 mb-xl-0">
            <div class="widgetbar text-right">

                <!-- <a class="btn btn-info font-weight-bold mr-2" href="{{ url('add-leads') }}"> <i
                        class="fa fa-user-plus"></i>
                    Create Leads </a> -->
               <!--  <a class="btn btn-info font-weight-bold new_w mr-2" 
                               onclick="modals('newdeals')" > <i class="fa fa-user-plus"></i>
                                </a> -->
 <a class="btn btn-info font-weight-bold new_w mr-2" data-animation="slideInRight" data-toggle="modal"
                                data-target="#newdeals"> <i class="fa fa-user-plus"></i>
                                 Add Deals </a>

                <a class="btn btn-info font-weight-bold new_w mr-2" id="listView"><i class="fa fa-list"
                        aria-hidden="true"></i>
                    list view </a>


              


            </div>
        </div>
    </div>

<div class="row" id="listviews" >

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
<div class="modal fade come-from-modal right in" id="newdeals" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
      <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle-1">Add Deals</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="row">
                <div class="col-sm-8 mb-4 mb-xl-0">
                   
                    <span class="font-weight-normal mb-2 text-muted">Note : Enter the details in the following fields If you want to
                        have your own fields then click on create dynamic layouts..</span>
                </div>
                <div class="col-sm-4 mb-4 mb-xl-0">
                    <div class="widgetbar text-right"> <a target="_blank" class="btn btn-info  mb-2"
                            href="{{ url('module-layout', $data['selected_fields'][0]->module_id) }}">Create Dynamic Layout </a>
                    </div>
                </div>
          </div>
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                       
                       
                     <form method="post" action="{{ url('save-deal') }}" autocomplete="nope">
                        @csrf



                        <input type="hidden" name="module_id" value="{{ $data['selected_fields'][0]->module_id }}">

                         <input type="hidden" name="column_id[]" value="30">
                        <input type="hidden" name="value[]" id="accounnt_id" value="">
                        <div class="row">
                            @foreach ($data['selected_fields'] as $val)

                                <div class="col-md-10">

                                    @if ($val->column_id == 15)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <select  name="value[]"
                                                class="form-control bg_input"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                     id="compName"  required="">
                                                     <option value="">Selecte Company name</option>
                                            </select>   
                                        </div>
                                    @elseif($val->column_id == 2)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="text" name="value[]" class="form-control bg_input"
                                                pattern="[6-9]{1}[0-9]{9}"
                                                title="Phone number with 6-9 and remaing 9 digit with 0-9"
                                                maxlength="10"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="">
                                        </div>
                                         @elseif($val->column_id == 1)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="text" name="value[]" class="form-control bg_input"
                                               
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="">
                                        </div>
                                          @elseif($val->column_id == 30)
                                        
                                       
                                            @elseif($val->column_id == 24)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="text" name="value[]" class="form-control bg_input"
                                               
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="">
                                        </div>
                                    @elseif($val->column_id == 22)
                                        <div class="form-group mb-10">

                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="hidden" name="value[]" class="form-control bg_input"
                                                value="{{ date('Y-m-d H:i:s') }}">
                                        </div>
                                    @elseif($val->column_id == 23)
                                        <div class="form-group mb-10">

                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="hidden" name="value[]" class="form-control bg_input"
                                                value="{{ date('Y-m-d H:i:s') }}">
                                        </div>
                                         @elseif($val->column_id == 20)
                                       <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                           <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                                <select class="form-control dealstage"  >
                                                    <option value="0">Default Pipeline</option>
                                                    @foreach($data['pipeline'] as $pipeline)

                                                    <option value="{{$pipeline->id}}">{{$pipeline->pipeline_name  }}</option>
                                                    @endforeach
                                                </select>
                                                <select name="value[]" class="form-control stages" required="" > </select>
                                        </div>
                                 @elseif($val->type == 'select')
                                       <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                           <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                                <select class="form-control dealstage"  >
                                                    
                                                    @foreach($data['field_option'] as $option)
                                                    @if($option->column_id == $val->column_id)
                                                    <option value="{{$option->id}}">{{$option->option_name  }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                               
                                        </div>
                                       
                                        
                                            
                                    @else
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="{{ $val->type }}" name="value[]"
                                                class="form-control bg_input"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}">
                                        </div>
                                    @endif
                                </div>
                            @endforeach

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-info font-weight-bold mb-2 ">Save</button>
                            </div>

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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
 
<script>
$(document).ready(function() {
$('.dealstage').on('change', function() {
var category_id = this.value;
// alert(category_id);
$.ajax({
type:"GET",
url: "{{url('/fetch-stages')}}/"+category_id,


success: function(response){
  // console.log(response);
$(".stages").html(response);
}
});
});
});
</script>
<script >
    $(document).ready(function() {
    $("#compName").select2( {
       placeholder: "Select a state",
       data:<?php  echo json_encode($data['company_names']) ;?>,
     
        
    });
    $("#compName").on('change',function(){
        var compN=$('#compName').val();

         var  data1= <?php  echo json_encode($data['company_names']) ?>;
         // console.log(data1);

       // var opt=data1.'0'.filter( record => record.name === compN);
    var result=data1.filter(obj=> obj.text == compN);
    // console.log(result['0']['name']);
    $('#accounnt_id').val(result['0']['name']);
      
    });
});
</script>