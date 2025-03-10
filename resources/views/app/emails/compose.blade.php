@extends('layouts.app')

@section('content')
<div class="page-wrapper">
<div class="content mt-5">
<div class="row">
<div class="col-sm-12">
<h4 class="page-title">Compose</h4>
</div>
</div>
<div class="row mt-5">
<div class="col-sm-12">
<div class="card-box">
<form>
<div class="form-group">
<input type="email" placeholder="To" class="form-control">
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="email" placeholder="Cc" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" placeholder="Bcc" class="form-control">
</div>
</div>
</div>
<div class="form-group">
<input type="text" placeholder="Subject" class="form-control">
</div>
<div class="form-group">
<textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
</div>
 <div class="form-group mb-0">
<div class="text-center compose-btn">
<button class="btn btn-primary"><span>Send</span> <i class="fas fa-paper-plane m-l-5"></i></button>
<button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="far fa-save m-l-5"></i></button>
<button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i class="far fa-trash-alt m-l-5"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
