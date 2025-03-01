@extends('settings.appp')

@section('content')
<div class="page-wrapper">
<div class="content mt-5">
<div class="row">
<div class="col-lg-12">
<form>
<div class="form-group">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="mailoption" id="phpmail" value="option1">
<label class="form-check-label" for="phpmail">PHP Mail</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="mailoption" id="smtpmail" value="option2">
<label class="form-check-label" for="smtpmail">SMTP</label>
</div>
</div>
<h4>PHP Email Settings</h4>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Email From Address</label>
<input class="form-control" type="email">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Emails From Name</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<h4 class="m-t-30">SMTP Email Settings</h4>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>SMTP Host</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>SMTP User</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>SMTP Password</label>
<input class="form-control" type="password">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>SMTP Port</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>SMTP Security</label>
<select class="form-control" id="sel1" name="sellist1">
<option>Select</option>
<option>None</option>
<option>SSL</option>
<option>TLS</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>SMTP Authentication Domain</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="col-sm-12 m-t-20 text-center">
<button type="button" class="btn btn-primary submit-btn">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection