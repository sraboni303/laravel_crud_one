<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Students</title>
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

		<a class="btn btn-sm btn-primary" href=" {{ route('students.create') }} ">Register</a>
		<br> <br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
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

						@foreach ($all_student as $student)

						<tr>
							<td> {{ $loop -> index + 1 }} </td>
							<td> {{ $student -> name }} </td>
							<td> {{ $student -> uname }} </td>
							<td> {{ $student -> email }} </td>
							<td> {{ $student -> cell }} </td>
							<td> {{ $student -> age }} </td>
							<td> {{ $student -> created_at -> diffForHumans() }} </td>
							<td>
								<a class="btn btn-sm btn-info" href=" {{ route('students.show', $student -> id) }} ">View</a>
								<a class="btn btn-sm btn-warning" href=" {{ route('students.edit', $student -> id) }} ">Edit</a>
								<a class="btn btn-sm btn-danger" href=" {{ route('students.delete', $student -> id) }} ">Delete</a>
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