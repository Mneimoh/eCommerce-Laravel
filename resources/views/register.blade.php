@extends('master')
@section('content')

<div class="container custom-login">
	<div class="row justify-content-center mt-5">
		<div class="col-sm-4 sm-offset-4">
			<form action="register" method="POST">
				@csrf
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">User Name</label>
			    <input type="text" name="name" class="form-control" aria-describedby="nameHelp" placeholder="User Name">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email Address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>

@endsection