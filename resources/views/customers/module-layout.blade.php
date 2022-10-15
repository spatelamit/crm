
@include('header')


<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


<?php
foreach ($data['selected_fields'] as $key => $selected_field) {
$fieldl[]=$selected_field->column_id;
  
 } 
 $selfield=$fieldl;
 $selfield1=implode(",",  $selfield);
 // print_r($selfield1);
?>
 
<div class="content-wrapper">
 
   <div class="row">
  
              <div class="col-md-3">
              
                <ul  class="nav flex-column nav-tabs text-center" id="ex1" role="tablist" >
                  
            	
            	
                
                <li class="nav-item active "  >  <a class="nav-link  " data-toggle="tab" role="tab" href="#" >{{$data['selected_fields'][0]->modules_name}} </a> </li>
             
               
                </ul>
              </div>
  

  <div class="col-md-9">
  

  
    <div class="tab-content" >
    
	
      <div
        class="tab-pane  active in "
        id="list{{$data['mid']}}"
        role="tabpanel">
       
            <div class="row">
              <div class="layoutfiled">
                    <ul  class="nav  "  role="tablist" >
                       <li class="nav-item active"  >  <a class="nav-link  " data-toggle="tab" role="tab" href="#layout"   >Layout</a> </li>
                         
                     </ul>
              </div>
              

            </div>
         <div class="row">
            <div  class="tab-content">
              <div
                class="tab-pane "
                id="layout"
                role="tabpanel">
                        <div class="row">

                      <section>
                          <div >
                          <h2>Selected</h2>

                          <form class="choice" action="{{ url('add-mod-fields') }}" method="POST">
                            @csrf
                            <label>Form</label>
                          
                            
                            <button   type="submit" class="btn btn-primary motom" >Submit</button>
                             <input type="hidden"  name="module[]" value="{{$data['selected_fields'][0]->module_id}}">
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
                          </form>
                               
                          </div>

                          <hr>
                            
                         <div class="choice">
                            <h2>Unselected</h2>
                          @foreach( $data['all_fields'] as $val) 
                               @if(!in_array($val->column_id,explode(",", $selfield1))) 
                               <li draggable="true">
                                   <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
                                     <input type="hidden"  name="module" value="{{$data['mid']}}">
                                    <input type="hidden"   name="column_id[]" value=" {{$val['column_id'] }}" > 
                                      <input type="hidden"   name="type[]" value=" {{$val->type}} " >
                                     <input type="hidden"   name="col_name[]" value="{{ $val->col_name}} " > 

                                           </li>
                                      
                                    @endif
                                    @endforeach
                                   
                                
                              </div>
                            
                    

                             </section>
             
                      </div>

              </div>


             
            </div>
          </div>


      </div>
   
     
    
    </div>
    <!-- Tabs content --> 
    
    </div>
 

<!--  -->

<!--  -->
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
</script>
  