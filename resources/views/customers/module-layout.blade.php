 @include('header')
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<style>

</style>
<?php
foreach ($data['selected_fields'] as $key => $selected_field) {
$field1[]=$selected_field->column_id;

 }
 $selfield=$field1;
 $selfield1=implode(",",  $selfield);
 // print_r($selfield1);
?>
<div class="content-wrapper">





  <div class="row">
    <div class="col-sm-12 mb-4 mb-xl-0">
      <h4 class="font-weight-bold text-dark"> {{$data['selected_fields'][0]->modules_name}}</h4>
      <p class="font-weight-normal mb-2 text-muted">Note : Ashish panwar</p>
    </div>
  </div>
  
  
  
  
  
  
  <div class="row">


    <div class="col-md-12">
     <div class="form_D_hedding"> <h3> Create Dynamic Layout </h3> </div>

    </div>


    <div class="col-md-4">
      <div class="Selected_green">
        <h4><i class="fa fa-check" aria-hidden="true"></i> Selected</h4>
         <p class="font-weight-normal mb-2 text-muted">Note : Which option do you want to fill, put them in selected and drag the information which you do not want to fill and drop it in unselected.

         </p>
         <hr />

        <form  action="{{ url('add-mod-fields') }}" method="POST">
          @csrf
          <label>Form</label>
          <input type="hidden"  name="module[]" value="{{$data['selected_fields'][0]->module_id}}">
       
          <ul class="list-arrow choice padd_50" style="height: 550px;" id="sortable">
            @foreach($data['selected_fields'] as $filelist )

          
            <li draggable="true">
              <label> {{ str_replace("_"," ",strtoupper( $filelist->col_name )) }}</label>
              <input type="hidden"  name="module" value="{{$filelist->module_id}}">
              <input type="hidden"   name="module_id[]" value="{{$filelist->module_id}}">
              <input type="hidden" name="column_id[]" value="{{$filelist->column_id}}">
              <input type="hidden"   name="type[]" value="{{$filelist->type}}" >
              <input type="hidden"  name="col_name[]" value="{{$filelist->col_name}}"  >
            </li>
          
            @endforeach
            
          </ul>
          
          <button   type="submit" class="btn btn-info " >Submit</button>
        </form>
      </div>
    </div>
    
    
    
    
    
    
    <div class="col-md-8">
      <div class="Selected_red">
        <h4><i class="fa fa-times" aria-hidden="true"></i> Unselected</h4>
         <p class="font-weight-normal mb-2 text-muted">Note : If you feel that your wrong field has been selected, then you can drag it to the selected option.</p>
         <hr />
        <ul class=" choice padd_50">
          @foreach( $data['all_fields'] as $val)

          @if(!in_array($val->column_id,explode(",", $selfield1)))
          <li draggable="true">
            <label> {{ str_replace("_"," ",strtoupper($val->col_name)) }} </label>
            <input type="hidden"  name="module" value="{{$data['mid']}}">
            <input type="hidden"   name="column_id[]" value=" {{$val->column_id }}" >
            <input type="hidden"   name="type[]" value=" {{$val->type}} " >
            <input type="hidden"   name="col_name[]" value="{{ $val->col_name}} " >
          </li>
          @endif
          @endforeach
        </ul>
        {{-- <p> Note:-  </p> --}}
      </div>
    </div>
    
    
    
    
    
    
    
    
  </div>



</div>
@include('footer')
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
  var input=document.getElementsByTagName('li');
  var choice = document.getElementsByClassName('choice');
  var dragitem=null;
  for(var i of input){
    i.addEventListener('dragstart',dragStart);
    i.addEventListener('dragend',dragEnd);
  }

  function dragStart(){
    dragitem=this;
    setTimeout(()=>this.style.display="none",0);

  }
  function dragEnd(){
    setTimeout(()=>this.style.display="block",0);
    dragitem=null;

  }

  for (j of choice){
     j.addEventListener('dragover',dragOver);
    j.addEventListener('dragenter',dragEnter);
    j.addEventListener('dragleave',dragLeave);
     j.addEventListener('drop',Drop);

  }

  function Drop(){
    this.append(dragitem);

  }

  function dragOver(e){
    e.preventDefault();
    this.style.border ="2px dotted cyan";

  }

  function dragEnter(e){
    e.preventDefault();

  }

  function dragLeave(){
     this.style.border ="none";

  }
  $(function  () {
  $("form.choice").sortable();
});
  $( function() {
    $( "#sortable" ).sortable();
  } );
</script>
