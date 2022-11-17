  @include('header')
<div class="content-wrapper">
	<div>
		<form action="/save-fields" method="POST">
			@csrf
			<div class="addfields">
				<div class="card mb-2 ">
					<div class="card-body ">
						<div class="row sel_option">

						<div class="col-md-5">
						<div class="form-group">
							<label>Label</label>
							<input type="text" class="form-control" value="{{old('label')}}" name="label[]" required="">
						</div>
						</div>

						<div class="col-md-5">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control field_type" name="type[]" id="field_type" required="">
								<option value="text"> text</option>
								<option value="email"> email</option>
								<option value="number"> number</option>
								<option value="password"> password</option>
								<option value="date">date</option>
								<option value="textarea">textarea</option>
								<option value="select">Select</option>
								
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
	 	var fields='<div class="card mb-2"><div class="card-body"><div class="row"><div class="col-md-3"><div class="form-group"><label>Field Name</label><input type="text" class="form-control" name="label[]" required=""></div></div><div class="col-md-3"><div class="form-group"><label>Type</label><select class="form-control field_type" id="field_type" name="type[]" required=""><option value="text"> text</option><option value="email"> email</option><option value="number"> number</option><option value="password"> password</option><option value="date">date</option><option value="textarea">textarea</option><option value="select">Select</option></select></div></div></div></div><button class="col-md-1" type="button" class="btn btn-danger" id ="remove">remove</button>';

	 	var optn='<div><input type="text" class="form-control" name="optionNames[]" value="" placeholder="Enter option name" ><button class="col-md-1" type="button" class="btn btn-danger" id ="removeopt">remove</button></div>';

	 	var selecOpt='<div class="row" id="sel_option" ><div class="optcls"><input type="text" class="form-control" name="optionNames[]" value="option1"><input type="text" class="form-control" name="optionNames[]" value="option2"></div><button type="button" id="add_option" class="btn btn-info font-weight-bold">add more option</button></div>'
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



	

			$('.field_type').on('change',function(){
				if($('#field_type').val() =='select'){
					// $('#sel_option').css({"display": "block"});
					$('.sel_option').append(selecOpt);

					$('#add_option').click(function(){
	 					$(".optcls").append(optn);
	 				});

	 					$(".optcls").on('click','#removeopt',function(){
	 					$(this).closest('div').remove();
	 						});
   		
				}else{
					$('#sel_option').closest('div').remove();
				}
			
				
			})
	 });
	 	
	 

</script>