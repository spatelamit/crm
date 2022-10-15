  @include('header')
<div class="content-wrapper">
	<div>
		<form action="/save-fields" method="POST">
			@csrf
			<div class="addfields">
				<div class="card mb-2">
					<div class="card-body">
						<div class="row">

						<div class="col-md-5">
						<div class="form-group">
							<label>Label</label>
							<input type="text" class="form-control" value="{{old('label')}}" name="label[]" required="">
						</div>
						</div>

						<div class="col-md-5">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control" name="type[]" required="">
								<option value="text"> text</option>
								<option value="email"> email</option>
								<option value="number"> number</option>
								<option value="password"> password</option>
								<option value="date">date</option>
								<option value="textarea">textarea</option>
								
							</select>
							

						</div>

						</div>

					
						</div>

						

						
						
						</div>
				</div>
			</div>

		<button type="button" id="add" class="btn btn-info font-weight-bold">add more fields</button>		
			<button type="submit" class="btn btn-info font-weight-bold" data-animation="slideInRight">Save</button>
			
		</form>
	</div>
</div>
  @include('footer')
<script type="text/javascript">
	
	 $(document).ready(function(){
	 	var fields='<div class="card mb-2"><div class="card-body"><div class="row"><div class="col-md-3"><div class="form-group"><label>Field Name</label><input type="text" class="form-control" name="label[]" required=""></div></div><div class="col-md-3"><div class="form-group"><label>Type</label><select class="form-control" name="type[]" required=""><option value="text"> text</option><option value="email"> email</option><option value="number"> number</option><option value="password"> password</option><option value="date">date</option><option value="textarea">textarea</option></select></div></div></div></div><button class="col-md-1" type="button" class="btn btn-danger" id ="remove">remove</button>';
	 	var x=1;
	 	$('#add').click(function(){
	 		$(".addfields").append(fields);
	 	});
	 	$(".addfields").on('click','#remove',function(){
	 		$(this).closest('div').remove();
	 	});
   		
				$('.field-checkobx').on('change', function(){
				   this.value = this.checked ? 1 : 0;
				     var data= this.checked ? 1 : 0;
				       $(".req").val(this.value);
				});


	 });
	 	
	 

</script>