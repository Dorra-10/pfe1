@extends('settings.appp')

@section('content')
<div class="main-wrapper login-body login_class">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox login_pswd">
					<div class="login-right">
						<div class="login-right-wrap mb-5 mt-5">
							<h1>Change Password</h1>
							<form action="login.html">
								<div class="form-group mt-5">
									<label>OLD PASSWORD</label>
									<input class="form-control" type="text" placeholder="Email"> </div>
								<div class="form-group">
									<label>NEW PASSWORD</label>
									<input class="form-control" type="text" placeholder="Email"> </div>
								<div class="form-group">
									<label>CONFIRM PASSWORD</label>
									<input class="form-control" type="text" placeholder="Email"> </div>
								<div class="form-group mt-5">
									<button class="btn btn-primary btn-block" type="submit">Update Password</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection