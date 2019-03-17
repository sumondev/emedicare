
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Step 2 </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="sign_up">

	

	<div>
		<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

			
			

			<div class="panel panel-default main dmain dsignup2">
				<div class="panel-body">

					<!-- <form class="form-horizontal" action="../library/dsignup2.lib.php" method="post"> -->

						<!-- Heading  -->

						<div class="text-center">
							<h2 id="heading">Create an appointment schedule for patient </h2>
							<hr>	
						</div>

						<!-- Code for apointment schedule -->
						<!-- Start -->

						

						<div class="col-md-6 col-md-offset-3">
							<div class="form-group form-horizontal">
								<label class="col-md-5 text-right control-label">Num of schedule :</label>

								<div class="col-md-5">
									<input class="form-control" type="number" max="6" id="slot" placeholder="Slot num" required="">
								</div>

							
								<button class="btn btn-primary col-md-2" id="go" type="button">Go</button>
								<!-- <input type="button" class="btn btn-primary col-md-2" value="Go"> -->

								<div class="row">
									<hr class="col-md-12">
								</div>
							</div>
						</div>

				<form class="form-horizontal" action="sprocs" method="POST">
						<!-- Dynamic input start -->
				
						<div class="col-md-6 col-md-offset-3" id="time_slot">
							
						</div>

						<!-- Dynamic input end -->


						<!-- Form submition -->
							
						<div class="form-group">
							
								<div class="col-md-12 col-sm-12 col-xm-12" >

									

									<div class="col-md-2 col-sm-4 col-xm-4 col-md-offset-3 ">

										<!-- <a href="dlogin.php" class="form-control text-center log-in">Log In</a> -->
									
									</div>

									<div class="col-md-2 col-sm-4 col-xm-4">
										<input class="form-control" type="button" id="rset" value="Reset">
									</div>

									<div class="col-md-2 col-sm-4 col-xm-4">
										
										<input class="form-control" id="dsubmit-2" type="submit" name="second_submit"  value="Submit">
									</div>

								</div>
							
						</div>


                      
						
							
						
					</form>
					
				</div>
				
			</div>


		</div>
	</div>

	<!-- Script -->

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

</body>
</html>