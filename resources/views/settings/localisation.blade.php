@extends('settings.appp')

@section('content')
<div class="page-wrapper">
<div class="content mt-5">
<div class="row ">
<div class="col-lg-12">
<form>
<h3 class="page-title">Company Settings</h3>
<div class="row mt-4">
<div class="col-md-4">
<div class="form-group">
<label>Default Country</label>
<select class="form-control" id="sel1" name="sellist1">
<option>Select</option>
<option>USA</option>
<option>London</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Timezone</label>
<select class="form-control" id="sel2" name="sellist1">
<option>Select</option>
<option>(UTC+5.30)Antartica/palmer</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Default Language</label>
<select class="form-control" id="sel3" name="sellist1">
<option>Select</option>
<option>English</option>
<option>Tamil</option>
<option>French</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Currency Code</label>
<select class="form-control" id="sel4" name="sellist1">
<option>Select</option>
<option>USD</option>
<option>Pound</option>
<option>Euro</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Currency Symbol</label>
<input class="form-control " value="Daniel Porter" type="text">
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