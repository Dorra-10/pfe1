@extends('layouts.app')

@section('content')
<div class="page-wrapper">
<div class="content mt-5">
<div class="row ">
<div class="col-lg-12">
<form>
<h3 class="page-title">Edit Asset</h3>
<div class="row mt-4">
<div class="col-md-4">
<div class="form-group">
<label>Asset Name <span class="text-danger">*</span></label>
<input class="form-control" type="text" value="Jim machine">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Asset Id</label>
<input class="form-control " value="#JM-0001" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Purchase Date</label>
<input class="form-control " value="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Purchase From</label>
<input class="form-control " value="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Manufacturer</label>
<input class="form-control " value="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Model</label>
<input class="form-control " value="" type="text">
</div>
</div>
 <div class="col-md-4">
<div class="form-group">
<label>Serial Number</label>
<input class="form-control " value="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Supplier</label>
<input class="form-control " value="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Condition</label>
<input class="form-control " value="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Warranty</label>
<input class="form-control " value="In Months" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Value</label>
<input class="form-control " value="$62480" type="text">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Asset User</label>
<select class="form-control" id="sel1" name="sellist1">
<option>John Doe</option>
<option>Richard Miles</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Status</label>
<select class="form-control" id="sel2" name="sellist1">
<option>Pending</option>
<option>Approved</option>
<option>Deployed</option>
<option>Managed</option>
</select>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<button type="button" class="btn btn-primary buttonedit mr-5 mt-5">Save</button>
</div>
@endsection