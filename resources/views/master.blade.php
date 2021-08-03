<!DOCTYPE html>
<html>
<head>
	<title>E-comm Website</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<!--@include('header') or the one belpw to include the header-->
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}

</body>
<style type="text/css">
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
</style>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			alert("all set")
		})
	})
</script>
-->
</html>