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
<<<<<<< HEAD
     
=======
      <div class="modal-body">
          <div class="form-group mb-10">
              <label>Upload Csv</label>
              <input type="file" name="importleads" accept=".csv,application/vnd.ms-excel" value="">
              
        </div>
>>>>>>> 13523e122a4fc7ad9c0d68628116e50d8704099b
      	<input type="hidden" name="module_id" value="{{$data['selected_fields'][0]->module_id}}">
        <div class="row">
      	@foreach($data['selected_fields'] as $val)
<<<<<<< HEAD
        
        
        
        
        <div class="col-md-3">
=======
       
        @if( $val->column_id == 1 )
>>>>>>> 13523e122a4fc7ad9c0d68628116e50d8704099b
        <div class="form-group mb-10">
           <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
          <input type="hidden" name="column_id[]" value="{{$val->column_id}}">
          <input type="{{$val->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" required="" >
        </div>
<<<<<<< HEAD
        </div>
        
       
        
=======
        @elseif( $val->column_id ==2 )
          <div class="form-group mb-10">
               <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
                <input type="hidden" name="column_id[]" value="{{$val->column_id}}">
                <input type="{{$val->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" required="" >
          </div>
          @else
           <div class="form-group mb-10">
              <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
                 <input type="hidden" name="column_id[]" value="{{$val->column_id}}">
                  <input type="{{$val->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" >
            </div>
        @endif
>>>>>>> 13523e122a4fc7ad9c0d68628116e50d8704099b
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