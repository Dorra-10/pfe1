@extends('settings.appp')

@section('content')
<div class="page-wrapper">
<div class="content mt-5">
<div class="row ">
<div class="col-lg-12">
<form>
<h3 class="page-title mb-3">Salary Settings</h3>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>DA (%)</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>HRA (%)</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<h3 class="page-sub-title">Provident Fund Settings</h3>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Employee Share (%)</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Organization Share (%)</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<h3 class="page-sub-title">ESI Settings</h3>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Employee Share (%)</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Organization Share (%)</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 text-center m-t-20">
<button type="button" class="btn btn-primary submit-btn">Save</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

@endsection