                                                        <form action="{{url('update_stages')}}" method="POST">
                                                            @csrf
                                                            <div class="form-group mb-10">
                                                                <label for="pipeline_stage_name">Pipeline name: </label>
                                                                <input type="hidden" name="pipeline_id" value="{{$data['stages'][0]->pipeline_group_id}}">
                                                                <input type="text" class="form-control bg_input" placeholder="Like... Initial Contact"
                                                                name="pipeline_stage_name" value="{{$data['stages'][0]->pipeline_name}}" required>
                                                            </div>
                                                           @foreach( $data['stages'] as $stage)
                                                            <hr>
                                                          
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group mb-10">
                                                                        <label for="stage_name"> Stage name: </label>
                                                                        <input type="hidden" name="stage_id[]" value="{{$stage->id}}">
                                                                        <input type="text" class="form-control bg_input"
                                                                        placeholder="Like... Initial Contact" name="stage_name[]" value="{{$stage->stage_name}}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group mb-10">
                                                                        <label for="stage_colour"> Stage color: </label>
                                                                        <input type="color" class="form-control bg_input" placeholder="Like... Blue"
                                                                        name="stage_colour[]" value="{{$stage->stage_colour}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            @endforeach
                                                           
                                                           
                                                           
                                                            
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>