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
			<div class="col-sm-12">
				
				<div id="myslider" class="carousel slide" data-ride="carousel">
					
					<!--Indicators dot nave (the lil dots)-->
					<ol class="carousel-indicators">
						<li data-target="#myslider" data-slide-to="0" class="active"></li>
						<li data-target="#myslider" data-slide-to="1"></li>
					</ol>
					
					<!--wrapper for slides-->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="../../../Users/Chizzel-c/Pictures/WOKE.jpg" alt="WOKE"/>
							<div class="carousel-caption">
								<h1>Caption1</h1>
							</div>
						</div>
					
						<div class="item">
							<img src="../../../Users/Chizzel-c/Pictures/Wallpaper.jpg" alt="Wallpaper"/>
							<div class="carousel-caption">
								<h1>Caption2</h1>
							</div>
						</div>
					</div>

					<!--controls (the left and right buttons)-->
					<a class="left carousel-control" href="#myslider" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
					</a>
					<a class="right carousel-control"href="#myslider" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
					</a>

				
					
				</div>
			</div>
		</div>
	</div>


	<!-- JavaScript files should be linked at the bottom of the page  -->
   	<script src="js/jquery.min.js.js"></script>
   	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- YOU HAVE TO ASS THIS FOR THE SLIDER!!!-->
	<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    })
  });    
</script>
</body>



</html>
