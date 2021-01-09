<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Teacher</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} ">
</head>
<body>
	
	

	<div class="wrap-table">
		@if( Session::has('deleted') )
			<p class="alert alert-warning"> {{ Session::get('deleted') }} <button class="close" data-dismiss="alert">&times;</button></p>
		@endif
		<a class="btn btn-sm btn-primary" href=" {{ route('teachers.create') }} ">Register</a>
		<br> <br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Teachers</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Age</th>
							<th>Joined</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						@foreach( $all_teacher as $teacher )

						<tr>
							<td> {{ $loop -> index + 1 }} </td>
							<td> {{ $teacher -> name }} </td>
							<td> {{ $teacher -> uname }} </td>
							<td> {{ $teacher -> email }} </td>
							<td> {{ $teacher -> cell }} </td>
							<td> {{ $teacher -> age }} </td>
							<td> {{ $teacher -> created_at -> diffForHumans() }}</td>
							<td>
								<a class="btn btn-sm btn-info" href=" {{ route('teachers.show', $teacher -> id) }} ">View</a>
								<a class="btn btn-sm btn-warning" href=" {{ route('teachers.edit', $teacher -> id) }} ">Edit</a>
								<a class="btn btn-sm btn-danger" href=" {{ route('teachers.delete', $teacher -> id) }} ">Delete</a>
							</td>
						</tr>

						@endforeach


					</tbody>
				</table>
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