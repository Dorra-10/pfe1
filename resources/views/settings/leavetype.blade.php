@extends('settings.appp')

@section('content')
<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<div class="mt-5">
<h4 class="card-title float-left mt-2">Leave Type</h4>
<a href="add-leave-type.html" class="btn btn-primary float-right veiwbutton">Add Leave
Type</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Booking ID</th>
<th>Name</th>
<th>Room Type</th>
<th>Total Numbers</th>
<th>Date</th>
<th>Email ID</th>
<th>Ph.Number</th>
<th>Status</th>
<th class="text-right">Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>BKG-0001</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
<a href="profile.html">Tommy Bernal <span>#0001</span></a>
</h2>
</td>
<td>Single</td>
<td>10</td>
<td>21-05-2020</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d5a1bab8b8acb7b0a7bbb4b995b0adb4b8a5b9b0fbb6bab8">[email&#160;protected]</a></td>
<td>631-254-6480</td>
<td>
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
Active
</a>
</div>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="edit-leave-type.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>BKG-0002</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
<a href="profile.html">David Alvarez <span>#0002</span></a>
</h2>
</td>
<td>Single</td>
<td>10</td>
<td>24-05-2020</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="543035223d303538223526312e14312c35392438317a373b39">[email&#160;protected]</a></td>
<td>212-414-9510</td>
<td>
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
Inactive
</a>
</div>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="edit-leave-type.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
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
</div>
</div>

@endsection