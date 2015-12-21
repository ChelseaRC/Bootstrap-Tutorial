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
		
		<header>
					<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Brand</a>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
	</header>
		
			<div class="row">
				<section class="col-md-8">
				<h1>Title</h1>
				<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
				 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
				 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				 </p>
				 <p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
				 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
				 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				 </p>
				 <p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
				 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
				 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				 </p>

				</section>
				<aside class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Pic1</div>
					<div class="panel-body">
						<img src="../../../Users/Chizzel-c/Pictures/WOKE.jpg" alt="WOKE" class="img-responsive"/>					
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Pic1</div>
					<div class="panel-body">
						<img src="../../../Users/Chizzel-c/Pictures/Wallpaper.jpg" alt="Wallpaper" class="img-responsive"/>					
					</div>
				</div>	
				</aside>
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
      interval: 60000
    })
  });    
</script>
</body>



</html>
