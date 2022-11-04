

<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Add Deals Leads </h4>
            <p class="font-weight-normal mb-2 text-muted">Note : Enter the details in the following fields If you want to
                have your own fields then click on create dynamic layouts..</p>
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right"> <a class="btn btn-info font-weight-bold mb-2"
                    href="{{ url('module-layout', 9) }}">Create Dynamic Layout </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   
                   
                    <form method="post" action="{{ url('save-leads') }}" autocomplete="nope">
                        @csrf

                        <input type="hidden" name="data_id" value="{{$data['lead_data'][0]->data_id}}">

                        <input type="hidden" name="module_id" value="{{ $data['lead_data'][0]->module_id }}">


                        <div class="row">
                            @foreach ($data['lead_data'] as $val)
                                <div class="col-md-3">

                                    @if ($val->column_id == 1)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="{{ $val->type }}" name="value[]"
                                                class="form-control bg_input"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="" value="{{$val->value}}">
                                        </div>
                                        @elseif($val->column_id == 15)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="{{ $val->type }}" name="value[]"
                                                class="form-control bg_input"
                                               
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="" value="{{$val->value}}">
                                        </div>
                                         @elseif($val->column_id == 3)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="text" name="value[]"
                                                class="form-control bg_input"
                                                 pattern="[6-9]{1}[0-9]{9}" 
                 title="Phone number with 6-9 and remaing 9 digit with 0-9" maxlength="10" 
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="" value="{{$val->value}}">
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
                                                required="" value="{{$val->value}}">
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
                                   
                                    @endif
                                </div>
                            @endforeach
                              @foreach ($data['selected_fields'] as $val1)
                              <?php $col_array=array('1','15','3','2');?>
                                  
                                 @if(!in_array($val1->column_id,$col_array))
                                  <div class="col-md-3">
                                    
                                 <div class="form-group mb-10">
                                         <label>{{ str_replace('_', ' ', strtoupper($val1->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val1->column_id }}">
                                            <input type="{{ $val1->type }}" name="value[]"
                                                class="form-control bg_input"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val1->col_name)) }}"
                                                required="" value="">
                                        </div>

                                    </div>
                                        @endif
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
