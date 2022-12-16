<div class="modal fade come-from-modal right in" id="newdeal" tabindex="-1" role="dialog" aria-hidden="true">
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

                                <div class="col-md-12">

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
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<div class="modal fade come-from-modal right show" id="edit_data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  slideInRight  animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body editdata" id="">

            </div>

        </div>
    </div>
</div>

