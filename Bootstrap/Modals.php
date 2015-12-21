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
		<link rel="stylesheet" href="Main.css">
		

		</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Click Me</button>
				
				<div class="modal fade" id="mymodal">
				
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3>Header</h3>
							</div>
							<div class="modal-body">
								<p>This is the body/content here.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>


	<!-- JavaScript files should be linked at the bottom of the page  -->
   	<script src="js/jquery.min.js.js"></script>
   	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>



</html>
