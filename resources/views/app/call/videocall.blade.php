@extends('layouts.app')

@section('content')
<div class="page-wrapper" style="padding-top: 60px !important;">
			<div class="chat-main-row">
				<div class="chat-main-wrapper">
					<div class="col-lg-9 message-view task-view">
						<div class="chat-window">
							<div class="fixed-header">
								<div class="navbar">
									<div class="user-details">
										<div class="float-left user-img">
											<a class="avatar" href="profile.html" title="Mike Litorus"> <img src="assets/img/profiles/avatar-05.jpg" alt="" class="rounded-circle"> <span class="status online"></span> </a>
										</div>
										<div class="user-info float-left"> <a href="profile.html"><span>Mike Litorus</span></a> <span class="last-seen">Online</span> </div>
									</div>
									<ul class="nav float-right custom-menu">
										<li class="nav-item dropdown dropdown-action"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog"></i></a>
											<div class="dropdown-menu dropdown-menu-right"> <a href="javascript:void(0)" class="dropdown-item">Settings</a> </div>
										</li>
									</ul>
								</div>
							</div>
							<div class="chat-contents">
								<div class="chat-content-wrap">
									<div class="user-video"> <img src="assets/img/video-call.jpg" alt=""> </div>
									<div class="my-video">
										<ul>
											<li> <img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt=""> </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="chat-footer">
								<div class="call-icons"> <span class="call-duration">00:59</span>
									<ul class="call-items">
										<li class="call-item">
											<a href="" title="Enable Video" data-placement="top" data-toggle="tooltip"> <i class="fas fa-video camera"></i> </a>
										</li>
										<li class="call-item">
											<a href="" title="Mute Audio" data-placement="top" data-toggle="tooltip"> <i class="fas fa-microphone microphone"></i> </a>
										</li>
										<li class="call-item">
											<a href="" title="Add User" data-placement="top" data-toggle="tooltip"> <i class="fas fa-user-plus"></i> </a>
										</li>
										<li class="call-item">
											<a href="" title="Full Screen" data-placement="top" data-toggle="tooltip"> <i class="fas fa-arrows-alt-v full-screen"></i> </a>
										</li>
									</ul>
									<div class="end-call">
										<a href="javascript:void(0);"> <i class="material-icons">call_end</i> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection