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
							<label>Field Name</label>
							<input type="text" class="form-control" name="label[]" required="">
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
								
							</select>
							

						</div>

						</div>

						<div class="col-md-2">
						<div class="form-group">
							<label>Required</label>
							<input type="checkbox"  name="required[]" value="1" >

						</div>
						</div>		

						</div>

						

						
						
						</div>
				</div>
			</div>

		<button type="button" onclick="addfields()" class="btn btn-info font-weight-bold">add more fields</button>		
			<button type="submit" class="btn btn-info font-weight-bold" data-animation="slideInRight">Save</button>
			
		</form>
	</div>
</div>
  @include('footer')
<script type="text/javascript">
	
	 function addfields() {
	 	var fields='<div class="card mb-2"><div class="card-body"><div class="row"><div class="col-md-5"><div class="form-group"><label>Field Name</label><input type="text" class="form-control" name="label[]" required=""></div></div><div class="col-md-5"><div class="form-group"><label>Type</label><select class="form-control" name="type[]" required=""><option value="text"> text</option><option value="email"> email</option><option value="number"> number</option><option value="password"> password</option><option value="date">date</option></select></div></div><div class="col-md-2"><div class="form-group"><label>Required</label><input type="checkbox"  name="required[]" value="1" ></div></div></div></div>';
	 	
   		 $(".addfields").append(fields);
 		 	 		

	 }
</script>