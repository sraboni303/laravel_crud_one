<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Profile</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} ">
</head>
<body>
	


	<div class="wrap">
		<div class="card shadow">
			<div class="card-body">
				<h2>Edit Profile</h2>
				@if( Session::has('success') )
					<p class="alert alert-success"> {{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
				@endif
				<form action=" {{ route('students.store') }} " method="POST">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" value=" {{ old('name') }} " class="form-control" type="text">
						@if( $errors -> has('name') )
							<small class="text-danger">{{ $errors -> first('name') }}</small>
						@endif
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" value=" {{ old('uname') }} " class="form-control" type="text">
						@if ( $errors -> has('uname') )
							<small class="text-danger"> {{ $errors -> first('uname') }} </small>
						@endif
					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input name="email" value=" {{ old('email') }} " class="form-control" type="text">
						@if( $errors -> has('email') )
							<small class="text-danger"> {{ $errors -> first('email') }} </small>
						@endif
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" value=" {{ old('cell') }} " class="form-control" type="text">
						@if( $errors -> has('cell') )
							<small class="text-danger"> {{ $errors -> first('cell') }} </small>
						@endif
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" value=" {{ old('age') }} " class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
						@if( $errors -> has('password') )
							<small class="text-danger"> {{ $errors -> first('password') }} </small>
						@endif
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
						<a class="btn btn-info" href=" {{ route('students.index') }} "> Back </a> 
					</div>


				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src=" {{ asset('assets/js/jquery-3.4.1.min.js') }} "></script>
	<script src=" {{ asset('assets/js/popper.min.js') }} "></script>
	<script src=" {{ asset('assets/js/bootstrap.min.js') }} "></script>
	<script src=" {{ asset('assets/js/custom.js') }} "></script>
</body>
</html>