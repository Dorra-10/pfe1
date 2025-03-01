@extends('layouts.app')

@section('content')
<div class="page-wrapper" style="min-height: 417px;padding-top: 60px !important;">

<div class="call-box incoming-box">
<div class="call-wrapper">
<div class="call-inner">
<div class="call-user">
<img class="call-avatar" src="assets/img/profiles/avatar-11.jpg" alt="">
<h4>Wilmer Deluna</h4>
<span>Calling ...</span>
</div>
<div class="call-items">
<a href="{{ url('chat') }}" class="btn call-item call-end"><i class="material-icons">call_end</i></a>
<a href="{{ url('videocall') }}" class="btn call-item call-start"><i class="material-icons">call</i></a>
</div>
</div>
</div>
</div>

</div>
@endsection