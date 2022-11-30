
        
               
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
  <div class="text-center mb-5 sortable Won_box" id="wondeal"> Won </div></div>
  
  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 d-xs-block">
  </div>

  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 text-right">
  <div class="text-center mb-5 sortable Lost_box " id="lossdeal">Lost </div></div>
  
                @forelse ($data['PipelineGroup'] as $stages)
                    <div class="col-lg-6 col-xl-3 ">
                        <div class="card m-b-30 ">
                            <div class="card-header ">
                                <h5 class="card-title mb-0">{{$stages->stage_name}}</h5>
                            </div>
                            <div class="card-body sortable  " id="{{$stages->id}}">
                            @forelse( $data['deal_data'] as $deal)
                             @if( $deal->Pipepline == $stages->id )
                                <div id="{{$deal->data_id}}">
                             
                                    <div class="card bg-primary-rgba m-b-20">
                                        <div class="card-body">
                                            <div class="row align-items-center ">
                                                <div class="col-8">
                                                    <div class="kanban-tag">
                                                        <h5 class="mb-0"> {{$deal->deal_name}} </h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="kanban-menu p-btn-0">
                                                    
                       
                                                    
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-10">
                                                    <div class="kanban-comment">
                                                        <span class="font-14">Web Development</span><br />
                                                        <span class="font-10">10-12-2022</span>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-2">
                                                    <div class="kanban-comment text-right">
                                                        <span class="font-10 bg-danger text-white">Hot</span>
                                                        
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="col-6 ">
                                                 <div class="kanban-users text-left">
                                                        <div class="avatar-group black_color">
                                                            <h5 class="mb-0">$259</h5>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 
                                                
                                                <div class="col-6">
                                                
                                                <div class="Updates_dox text-right">
                                                <a class="Updates_btn" data-animation="slideInRight" data-toggle="modal" data-target="#deal_date_update">
                                               <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Updates</a>
                                               </div>
                                               
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                  
                                </div>
                                @endif
                                @empty
                                @endforelse
                               
                                
                                
                                <button type="button" class="btn btn-primary-rgba btn-block btn-lg font-16"><i class="feather icon-plus mr-2"></i>Add Leads</button>
                            </div>
                        </div>
                    </div> 
                    @empty
                    @endforelse
                    








 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

   <script >
  $(function(){
      
      $(".sortable").sortable({
        start: function(event, div) {
            receiver = "";
            sender = "";
        },
        connectWith: ".sortable",
        receive: function(event, div) {
            sender = div.sender;
            receiver = $(this);
        
            iddata = [];
              iddata[0] = receiver.attr('id');
              iddata[1] = div.item.attr("id");
              alert(iddata);
                if (iddata[0] == 'wondeal' || iddata[0] == 'lossdeal') {
                //alert("Won Loss Case.");
                $.ajax({
                  url:'make-deal-won-loss/'+iddata,
                 
                  type:'get',
                  success:function(response)
                  {
                    $("#iddata").remove();
                    toastr.success("Deal Successfully Marked as Won/Loss.", "Success", {
                        positionClass: "toast-bottom-left",
                        tapToDismiss: 1  
                    });
                  },
                  error:function(response) {
                    toastr.error("Deal Won/Loss Status Not Changed.", "Oops", {
                        positionClass: "toast-bottom-left",
                        tapToDismiss: 1  
                    });
                  }
                })
              }else{
                $.ajax({
                  url:'update-deal-stage/'+iddata[0]+'/'+ iddata[1],
                  
                  type:'get',
                  success:function(response)
                  {
                    toastr.success("Deal Status Successfully Changed.", "Success", {
                        positionClass: "toast-bottom-left",
                        tapToDismiss: 1  
                    });
                  },
                  error:function(response) {
                    toastr.error("Deal Status Not Changed.", "Oops", {
                        positionClass: "toast-bottom-left",
                        tapToDismiss: 1  
                    });
                  }
                })
              }
              
          },
         cursor: "move"
      });
    });
</script>