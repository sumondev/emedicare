
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="overflow: hidden;">


<div class="wraper">
		
<!-- Top div -->
		<section>
			<div class="navbar navbar-default navbar-static-top col-md-12 col-sm-12 col-xm-12">

				<div class="navbar-header">
					<a class="navbar-brand " href="#"><h2>Medical Center</h2></a>
				</div>

				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Email  <span class="glyphicon glyphicon-envelope"></span></a></li>
					<li><a href="#">Message  <span class="glyphicon glyphicon-comment"></span></a></li>
					<li>
						<a href="#"> 	
							<?php 
								session_start(); 
								echo $_SESSION['name'];
						 	?>		
						</a>
					</li>
					<li><a href="#">Log Out  <span class="glyphicon glyphicon-off"></span></a></li>
				</ul>
				
			</div>
		</section>

<!-- Top div end -->

<!-- Left Div -->

	<section class="col-md-2">

<!-- innerdiv class for fixed nbavbar. disabled for now -->

		<div class="innerdiv"> 
				<div class="panel panel-default sidebar">
				
					<!-- <div class="panel-heading header_design menu_color">
						<div >
							<span class="glyphicon glyphicon-user"></span> Dashboard
						</div>
					</div> -->

					<ul class="list-group ">
							
							<li><a class="list-group-item item head" href="home"> <span class="glyphicon glyphicon-home"></span> Dashboard</a></li>		

							<li><a class="list-group-item item menu_color" href="request"><span class="glyphicon glyphicon-pencil"></span>Approval</a></li>
							
							<li><a class="list-group-item item menu_color" href="manage"><span class="glyphicon glyphicon-pencil"></span>Manage Price</a></li>
														
							<li><a class="list-group-item item menu_color" href="notice"><span class="glyphicon glyphicon-edit"></span> Notice Board </a></li>

							

						

								
								
					</ul>

			</div>
		</div>

	</section>

<!-- Left Div end -->


<div class="col-md-10" id="load_content_here">


	
</div>


</div>





	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>


</body>
</html>