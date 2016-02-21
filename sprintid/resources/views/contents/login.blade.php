


@extends('layouts.default')

@section('content')

@include('partials.header-initial')

<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="title-box">LOGIN TO SPRINT</h1>
				<div class="box-login">
					<form action="" class="form-horizontal">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Password</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
						<div class="form-group div-btn-login">
							<button class="btn btn-orange btn-lg btn-block">LOGIN</button>
						</div>
					</form>
				</div>

				<div class="text-center box-login-footer ">
					<a href="#">Lupa password Anda?</a>
					<p>Belum punya akun sprint? <a href="#">Sign Up!</a></p>
				</div>

			</div>
		</div>
	</div>

@include('partials.footer')


@stop
