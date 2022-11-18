@include('header')
<div class="content-wrapper">
  <div class="row mb-3">
    <div class="col-sm-12 mb-4 mb-xl-0">
      <h4 class="font-weight-bold text-dark"> Edit Leads </h4>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form method="post" action="{{url('update-lead')}}" autocomplete="nope">
            @csrf
            <div class="row">
              <input type="hidden" name="module_id" value="{{$data['edit_lead_data'][0]->module_id}}">
              <input type="hidden" name="data_id" value="{{$data['edit_lead_data'][0]->data_id}}">
              @foreach($data['edit_lead_data'] as $val)
              @if ($val->column_id == 1)
              <div class="col-md-4">
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
              <div class="col-md-4">
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
              @elseif($val->column_id == 15)
              <div class="col-md-4">
                <div class="form-group mb-10 ">
                  <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="text" name="value[]"
                                                class="form-control bg_input"
                                                
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="" value="{{$val->value}}">
                </div>
              </div>
              @elseif($val->column_id == 22)
              <div class="col-md-4">
                <div class="form-group mb-10">
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="hidden" name="value[]"
                                                class="form-control bg_input"
                                                
                                              value="{{$val->value}}" >
                </div>
              </div>
              @elseif($val->column_id == 23)
              <div class="col-md-4">
                <div class="form-group mb-10">
                  <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                  <input type="hidden" name="value[]"
                                                class="form-control bg_input"
                                                value="{{date('Y-m-d H:i:s')}}" 
                                                >
                </div>
              </div>
              @else
              <div class="col-md-3">
                <div class="form-group mb-10 as">
                  <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
                  <input type="hidden" name="column_id[]" value="{{$val->column_id}}">
                  <input type="{{$val->type}}"  name="value[]" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" value="{{$val->value}}" >
                </div>
              </div>
              @endif
              @endforeach
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@include('footer')