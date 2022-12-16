

      

        <form method="post" action="{{url('update-lead')}}" autocomplete="nope">
            @csrf
            <div class="row">
              <input type="hidden" name="created_at" value="{{$data['edit_lead_data'][0]->created_at}}">
              <input type="hidden" name="module_id" value="{{$data['edit_lead_data'][0]->module_id}}">
              <input type="hidden" name="data_id" value="{{$data['edit_lead_data'][0]->data_id}}">
              <input type="hidden" name="user_id" value="{{$data['edit_lead_data'][0]->user_id}}">

          @foreach($data['edit_lead_data'] as $val)
             @if(in_array($val->column_id,explode(",", $sel_col_ids) ))

              @if($val->column_id == 1)
              <div class="col-md-10">
                <div class="form-group mb-10 ashish">
                  <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="{{ $val->type }}" name="value[]"
                                                class="form-control bg_input"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="" value="{{$val->value}}">
                </div>
              </div>
              @elseif($val->column_id == 2)
              <div class="col-md-10">
                <div class="form-group mb-10 ">
                  <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="text" name="value[]"
                                                class="form-control bg_input"
                                                 pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 6-9 and remaing 9 digit with 0-9" maxlength="10" 
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="" value="{{$val->value}}">
                </div>
              </div>
              @elseif($val->column_id == 20)
             <!--  <div class="col-md-10">
                                       <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                           <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                                <select class="form-control dealstage"  >
                                                    <option value="0">Default Pipeline</option>
                                                    @foreach($data['pipeline'] as $pipeline)

                                                    <option value="{{$pipeline->id}}">{{$pipeline->pipeline_name }}</option>
                                                    @endforeach
                                                </select>
                                                <select name="value[]" class="form-control stages" required="" > </select>
                                        </div>
                                      </div> -->
              @elseif($val->column_id == 15)

              <div class="col-md-10">
                <div class="form-group mb-10 ">
                  <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="text" name="value[]"
                                                class="form-control bg_input"
                                                
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                {{ isset($val->value) ? "readonly" : "" }}
                                                 value="{{$val->value}}">
                </div>
              </div>
               @elseif($val->column_id == 30)

              <div class="col-md-10" style="display: none">
                <div class="form-group mb-10 ">
                  <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="text" name="value[]"
                                                class="form-control bg_input"
                                                
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                readonly="" value="{{$val->value}}">
                </div>
              </div>
              @elseif($val->column_id == 22)
              <div class="col-md-10">
                <div class="form-group mb-10">
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="hidden" name="value[]"
                                                class="form-control bg_input"
                                                
                                              value="{{$val->value}}" >
                </div>
              </div>
              @elseif($val->column_id == 23)
              <div class="col-md-10">
                <div class="form-group mb-10">
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="hidden" name="value[]"
                                                class="form-control bg_input"
                                                value="{{date('Y-m-d H:i:s')}}" 
                                                >
                </div>
              </div>
              @else
                @if($val->type=='select')
                <div class="col-md-10">
                <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                           <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                                <select name="value[]" class="form-control dealstage" >
                                                    
                                                    @foreach($data['field_option'] as $option)
                                                    @if($option->column_id == $val->column_id)
                                                    <option value="{{$option->option_name}}">{{$option->option_name  }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                               
                                        </div>
                                      </div>
                @else
                <div class="col-md-10">
                  <div class="form-group mb-10 as">
                    <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
                    <input type="hidden" name="column_id[]" value="{{$val->column_id}}">
                    <input type="{{$val->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" value="{{$val->value}}" >
                  </div>
                </div>
                @endif
                
              @endif
              @endif
           @endforeach

              @foreach( $data['selected_fields'] as $select_field)
               @if(!in_array($select_field->column_id,explode(",", $selfield1) ))
                @if($select_field->column_id == 20)
                            <div class="col-md-10">
                                       <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($select_field->col_name)) }}</label>
                                           <input type="hidden" name="column_id[]" value="{{ $select_field->column_id }}">
                                                <select class="form-control dealstage"  >
                                                    <option value="0">Default Pipeline</option>
                                                    @foreach($data['pipeline'] as $pipeline)

                                                    <option value="{{$pipeline->id}}">{{$pipeline->pipeline_name  }}</option>
                                                    @endforeach
                                                </select>
                                                <select name="value[]" class="form-control stages" required="" > </select>
                                        </div>
                                      </div>
                       @else
                                    @if($select_field->type=='select')
                                     <div class="col-md-10">
                                          <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($select_field->col_name)) }}</label>
                                           <input type="hidden" name="column_id[]" value="{{ $select_field->column_id }}">
                                                <select class="form-control "  name="value[]">
                                                    
                                                    @foreach($data['field_option'] as $option)
                                                    @if($option->column_id == $select_field->column_id)
                                                    <option value="{{$option->option_name}}">{{$option->option_name  }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                               
                                        </div>
                                      </div>
                                     @else
                                      <div class="col-md-10">
                                          <div class="form-group mb-10 as">
                                          <label>{{ str_replace("_"," ",strtoupper($select_field->col_name)) }}</label>
                                          <input type="hidden" name="column_id[]" value="{{$select_field->column_id}}">
                                          <input type="{{$select_field->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($select_field->col_name)) }}" value="" >
                                        </div>
                                      </div>
                                      @endif
                                       
               @endif
               @endif
               @endforeach
             <div class="modal-footer">
            
              <div class="col-md-12 text-right">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
            </div>
          </form>

       
    
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
