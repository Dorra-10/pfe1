@extends('layouts.app')

@section('content')
<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Assests</h4> <a href="{{ url('addassets') }}" class="btn btn-primary float-right veiwbutton">Add Assests</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-3">
									<div class="form-group">
										<label>Employee Name</label>
										<select class="form-control" id="sel1" name="sellist1">
											<option>Select Name</option>
											<option>Loren Gatlin</option>
											<option>Tarah Shrosphire</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>From</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker"> </div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>To</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker"> </div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Search</label> <a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a> </div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-stripped">
										<thead>
											<tr>
												<th>Item</th>
												<th>Purchased From</th>
												<th>Purchased Date</th>
												<th>Amount</th>
												<th>Paid By</th>
												<th>Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Richard Brobst</td>
												<td>Jim Equipment Inc</td>
												<td>22 Jun 2020</td>
												<td>Richard Brobst</td>
												<td>$62480</td>
												<td>cheque</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{ url('editassets') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>Richard Brobst</td>
												<td>Jim Equipment Inc</td>
												<td>25 Jun 2020</td>
												<td>Richard Brobst</td>
												<td>$23554</td>
												<td>cheque</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="{{ url('editassets') }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="delete_asset" class="modal fade delete-modal" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
								<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
								<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection