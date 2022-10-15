@include('header')
<div class="contentbar">

	  <div class="row">
        <div class="col-sm-8 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark"> Leads </h4>
           
        </div>
       
    </div>

  <div class=" right" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  slideInRight  animated" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle-1"> template</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form method="post" action="{{url('add-leads')}}" autocomplete="nope">
              @csrf
      <div class="modal-body">
      	@foreach($data['selected_fields'] as $val)
        <div class="form-group mb-10">
          <label>{{ str_replace("_"," ",strtoupper($val->col_name)) }}</label>
          <input type="{{$val->type}}"  name="{{$val->col_name}}" class="form-control bg_input" placeholder="Enter your {{ str_replace('_','' ,strtoupper($val->col_name)) }}" required>
        </div>
        @endforeach
       <!--  <div class="form-group mb-10">
          <label>Sender Id:</label>
          <input type="text" placeholder="Enter your Sender Id (Its should be 6  characters)" pattern="[A-Za-z]{6}" title="6 haracters allowd, not a numerics " name="sender_id" class="form-control bg_input " required>
        </div>
        <div class="form-group mb-10">
          <label>PE ID:</label>
          <input type="text" pattern="[0-9]{19}" title="PE ID  should be 19 digit" name="pe_id" class="form-control bg_input" placeholder="Enter your PE ID (Its should be 19 digit)" required>
        </div>
        <div class="form-group mb-10">
          <label>Template_ID:</label>
          <input type="text" name="template_id" pattern="[0-9]{19}" title="template ID  should be 19 digit" class="form-control bg_input" placeholder="Enter Template ID " required>
        </div>
        <div class="form-group mb-10">
          <label>Content:</label>
          <textarea name="template" class="form-control bg_input" placeholder="Enter your Content" required></textarea>
        </div>
      </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>

    </div>
  </div>
</div>
</div>
@include('footer')