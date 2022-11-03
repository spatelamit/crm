@include('header')


<div class="content-wrapper">
	<div class="row">
				<div class="col-lg-12 col-xl-4">
					<form action="{{url('save-convert-lead')}}" method="post">
						@csrf
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="ecom-dashboard-widget">
                            	 @foreach($data['lead_data'] as $key=>$value)
                            	 <input type="hidden" name="data_id" value="{{$value->data_id}}">
                            	  <input type="hidden" name="module_id" value="{{$value->module_id}}">
                                  @if ($value->column_id == 15)
                                <div class="media">
                                
                                    <div class="media-body">
                                        <h5>Account Name</h5>
                                        <input type="hidden" name="account_name" value="{{$value->value}}">
                                        <p>{{$value->value}}</p>
                                    </div>
                                     
                                    
                                    

                                   
                                  
                                </div>
                                 @elseif ($value->column_id == 3)
                                 <div class="media">
                                  
                                    
                                    <div class="media-body">
                                        <h5>Contact Name</h5>
                                          <input type="hidden" name="contact_name" value="{{$value->value}}">
                                        <p>{{$value->value}}</p>
                                    </div>
                                     
                                      </div>
                                   
                                   @endif
                                    @endforeach
                              
                               
                            </div>
                        </div>
                    </div>
                   <div class="media-body">
                                       <button  class="btn btn-info" type="submit">Convert</button>
                                        <a  class="btn btn-info" href="{{url('lead-profile',$data['lead_data'][0]->data_id)}}">Cancel</a>
                                    </div>
					</form>
                </div>
                
	</div>

</div>