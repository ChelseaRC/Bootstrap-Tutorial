<!DOCTYPE html>
<html>
<!-- This is the Local way of implementing bootstrap -->
<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		
		<title>Push and pull</title>
		
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		
		<!-- My own CSS -->
		<link rel="stylesheet" href="css/Main.css">
		

		</head>

<body>

<!-- On a medium and up device it will show column1 on the right 
and column2 on the left. but on a phone or tablet it will show column1
1st then colum2 stacked. -->
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-8 bg-danger">
			column1
			</div>
			<div class="col-md-8 col-md-pull-4 bg-success">
			 this is column 2
			</div>

		</div>
	</div>


	<!-- JavaScript files should be linked at the bottom of the page  -->
   	<script src="js/jquery.min.js.js"></script>
   	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>



</html>
