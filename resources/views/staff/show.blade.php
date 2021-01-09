<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} ">
	<style>
    	table td, th{
    		border: 1px solid #ddd;
    		text-align: center;
    	}
    </style>
</head>
<body>
	<div class="container w-50 my-5 py-5 shadow">
		<table class="table table-striped">
			<tbody>
				<tr>
					<th>ID</th>
					<td> {{ $profile -> id }} </td>
				</tr>

				<tr>
					<th>Full Name</th>
					<td> {{ $profile -> name }} </td>
				</tr>

				<tr>
					<th>Username</th>
					<td> {{ $profile -> uname }} </td>
				</tr>

				<tr>
					<th>Cell</th>
					<td> {{ $profile -> cell }} </td>
				</tr>

				<tr>
					<th>Email</th>
					<td> {{ $profile -> email }} </td>
				</tr>

				<tr>
					<th>Age</th>
					<td> {{ $profile -> age }} </td>
				</tr>
			</tbody>
		</table>
		<a class="btn btn-block btn-success" href=" {{ route('staff.index') }} ">Back</a>

	</div>
	







	<!-- JS FILES  -->
	<script src=" {{ asset('assets/js/jquery-3.4.1.min.js') }} "></script>
	<script src=" {{ asset('assets/js/popper.min.js') }} "></script>
	<script src=" {{ asset('assets/js/bootstrap.min.js') }} "></script>
	<script src=" {{ asset('assets/js/custom.js') }} "></script>
</body>
</html>