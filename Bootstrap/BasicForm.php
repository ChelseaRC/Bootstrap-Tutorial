<!DOCTYPE html>
<html>
<!-- This is the Local way of implementing bootstrap -->
<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		
		<title>Buttons</title>
		
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		
		<!-- My own CSS -->
		<link rel="stylesheet" href="css/Main.css">
		

		</head>

<body>

	<div class="container">
		
		<div class="row">
			<div class="col-xs-12">
				<h2>Basic Form</h2>
				<form action="" method="">
					<div class="form-group">
						<!-- For is the ID of the input it is for. It so that if you click on the label it will highlight the related input box -->
						<label for="email" >Email Address</label>
						<input type="email" class="form-control" id="email"/>
					</div>
					<div class="form-group">
						<label for="password" >password</label>
						<input type="password" class="form-control" id="password"/>
					</div>
					<div class="form-group">
						<label for="file" >file upload</label>
						<input type="file" id="file"/>
					</div>
					<div class="form-group">
						<input type="submit" id="submit" class="btn btn-default" value="Submit"/>
					</div>

				</form>
			</div>
		</div>
	</div>


	<!-- JavaScript files should be linked at the bottom of the page  -->
   	<script src="js/jquery.min.js.js"></script>
   	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>



</html>
