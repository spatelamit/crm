@include('header')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Add Leads </h4>
            <p class="font-weight-normal mb-2 text-muted">Note : Enter the details in the following fields If you want to
                have your own fields then click on create dynamic layouts..</p>
        </div>
        <div class="col-sm-4 mb-4 mb-xl-0">
            <div class="widgetbar text-right"> <a class="btn btn-info font-weight-bold mb-2"
                    href="{{ url('module-layout', $data['selected_fields'][0]->module_id) }}">Create Dynamic Layout </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ url('save-leads') }}" autocomplete="nope">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">

                            </div>

                            <div class="col-md-4 text-right">
                                <div class="form-group mb-10">
                                    <label>Upload Csv</label>
                                    <input type="file" name="importleads" accept=".csv,application/vnd.ms-excel"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-info font-weight-bold mb-2 ">Upload CSv</button>
                        </div>


                    </form>
                    <form method="GET" action="{{url('export_data')}}">
                        <button type="submit">Export Data</button>
                    </form>

                    <form method="post" action="{{ url('save-leads') }}" autocomplete="nope">
                        @csrf



                        <input type="hidden" name="module_id" value="{{ $data['selected_fields'][0]->module_id }}">


                        <div class="row">
                            @foreach ($data['selected_fields'] as $val)
                                <div class="col-md-3">

                                    @if ($val->column_id == 1)
                                        <div class="form-group mb-10">
                                            <label>{{ str_replace('_', ' ', strtoupper($val->col_name)) }}</label>
                                            <input type="hidden" name="column_id[]" value="{{ $val->column_id }}">
                                            <input type="{{ $val->type }}" name="value[]"
                                                class="form-control bg_input"
                                                placeholder="Enter your {{ str_replace('_', '', strtoupper($val->col_name)) }}"
                                                required="">
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
@include('footer')
