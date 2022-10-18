@include('header')
<div class="content-wrapper">


        
        <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Add Leads </h4>
            <p class="font-weight-normal mb-2 text-muted">Note : .......</p>
           
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right">
                <a class="btn btn-info font-weight-bold mb-2" href="{{url('module-layout',$data['selected_fields'][0]->module_id)}}">Create Dynamic Layout </a>
            </div>
        </div>
    </div>
        
        
      <div class="row">
      <div class="col-md-12">
      <div class="card">
      <div class="card-body">
      
      <form method="post" action="{{url('save-leads')}}" autocomplete="nope">
              @csrf
     
      	<input type="hidden" name="module_id" value="{{$data['selected_fields'][0]->module_id}}">
        <div class="row">
      	@foreach($data['selected_fields'] as $val)
        
        
        
        
        <div class="col-md-3">
        <div class="form-group mb-10">
          <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
          <input type="hidden" name="column_id[]" value="{{$val->column_id}}">
          <input type="{{$val->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" >
        </div>
        </div>
        
       
        
        @endforeach
         </div>
      
<div class="col-md-12 text-right">
        <button type="submit" class="btn btn-info font-weight-bold mb-2 ">Save</button>
    </div>    

    </form>
      
      
      </div>
      </div>
      </div>
      </div> 

    
    
    
   
  
</div>
@include('footer')