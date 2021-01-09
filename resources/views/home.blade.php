<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our College</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
	<link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} ">
	<style>
		
		.box{
			display: flex;
			justify-content: center;
			align-items: center;
			width: 50%;
			padding: 200px;
			background-color: lightseagreen;
			margin: auto;
			margin-top: 5%;
		}
		.box a{
			text-decoration: none;
			color: #fff;
			font-size: 30px;
			font-weight: bold;
			padding: 20px;

		}
	</style>
</head>

<body>

<div class="main-div">
		
	<h1 class="text-center text-danger mt-5">Wellcome To Our College</h1>	
	<div class="box">
		<a href=" {{ route('students.index') }} ">Students</a>
		<a href=" {{ route('teachers.index') }} ">Teachers</a>
		<a href=" {{ route('staff.index') }} ">Staff</a>
	</div>

</div>









	<!-- JS FILES  -->
	<script src=" {{ asset('assets/js/jquery-3.4.1.min.js') }} "></script>
	<script src=" {{ asset('assets/js/popper.min.js') }} "></script>
	<script src=" {{ asset('assets/js/bootstrap.min.js') }} "></script>
	<script src=" {{ asset('assets/js/custom.js') }} "></script>
</body>
</html>