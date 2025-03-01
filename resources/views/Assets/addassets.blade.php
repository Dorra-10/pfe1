@extends('layouts.app')

@section('content')
<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add Assest</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Assest Name</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Assest ID</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Purchase Date</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Purchase From</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Manufacturer</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Model</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Serial Number</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Supplier</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Condition</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Warranty</label>
										<input class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email ID</label>
										<input type="text" class="form-control" id="usr"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Value</label>
										<input type="text" class="form-control" id="usr1"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Assest User</label>
										<select class="form-control" id="sel1" name="sellist">
											<option>Select</option>
											<option>John Doe</option>
											<option>Richard Miles</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Status</label>
										<select class="form-control" id="sel2" name="sellist">
											<option>Select</option>
											<option>Pending</option>
											<option>Approved</option>
										</select>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<button type="button" class="btn btn-primary buttonedit">Add Assest</button>
			</div>
		</div>
@endsection