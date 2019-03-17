
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="sign_up">

	

	<div>
		<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

			
			

			<div class="panel panel-default main">
				<div class="panel-body">

					<form class="form-horizontal" action="sprocess" method="post">

						<div class="text-center">
							<h2 id="heading">Sign UP</h2>
							<hr>	
						</div>

						<!-- Left input -->
			
								<div class="col-md-6 col-sm-6">

									<div class="form-group">
										
										<!-- <label class="col-md-4 col-sm-4 control-label ">First Name</label> -->

										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control " type="text" name="firstname" placeholder="First Name" required="">
										</div>

									</div>

									
									<div class="form-group">
										
										<!-- <label class="col-md-4 col-sm-4 text-left control-label">Last Name</label> -->
										
										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control" type="text" name="lastname" placeholder="Last Name" required="">
										</div>

									</div>

									<div class="form-group">
										
										<!-- <label class="col-md-4 col-sm-4 control-label">Email</label> -->
										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control" type="email" name="email" placeholder="name@example.com" required="">
										</div>
									</div>

									<div class="form-group">
										
										<!-- <label class="col-md-4 col-sm-4 text-right control-label">Password</label> -->
										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control" type="password" name="password" placeholder="Password" required="">
										</div>
									</div>


									<div class="form-group">
										
										<!-- <label class="col-md-4 col-sm-4 text-right control-label">meedical id</label> -->
										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control" type="password" name="medicalid" placeholder="Confirm password" required="">
										</div>
									</div>


									<div class="form-group">
										
										<!-- <label class="col-md-4 col-sm-4 text-left control-label">Age</label> -->
										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control" type="number" name="age" placeholder="Age" required="">
										</div>
									</div>

									<div class="form-group">
										<!-- <label class="col-md-4 col-sm-4 text-right control-label">Mobile</label> -->

										<div class="col-md-10 col-sm-10 col-md-offset-1">
											<input class="form-control" type="number" name="mobile" placeholder="Contract number" required="">
										</div>
									</div>
								
									
								</div>

						<!-- Left input end -->

						<!-- Right input  -->


						<div class="col-md-6 col-sm-6">



					<!-- 	<div class="form-group">
							<label class="col-md-4 col-sm-4 text-right control-label">Address</label>

							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="password" name="" placeholder="Confirm Password" required="">
							</div>
						</div> -->

						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 text-right control-label">Address</label> -->

							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<input class="form-control" type="text" name="address" placeholder="Your Address info" required="">
							</div>
						</div>


						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 text-right control-label">National Id</label> -->

							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<input class="form-control" type="text" name="nationalid" placeholder="Valid National ID"></input>
							</div>

						</div>

						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 control-label">Blood Group</label> -->
							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<select class="form-control" name="bloodgroup" required="">
									<option disabled="" selected="">Blood Group</option>
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
									<option>AB+</option>
									<option>AB-</option>
									<option>O+</option>
									<option>O-</option>

								</select>
							</div>
						</div>

						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 text-right control-label">Gender</label> -->
							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<select class="form-control" name="gender" required="">
									<option disabled="" selected="">Gender</option>
									<option>Male</option>
									<option>Female</option>
									<option>Others</option>

								</select>
							</div>
						</div>

						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 text-right control-label">Religion</label> -->
							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<select class="form-control" name="religion" required="">
									<option disabled="" selected="">Religion</option>
									<option>Islam</option>
									<option>Hinduism</option>
									<option>Buddhist</option>
									<option>Christian</option>
									<option>Others</option>
									

								</select>
							</div>
						</div>

						

						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 text-right control-label">Nationality</label> -->

							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<input class="form-control" type="text" name="nationality" placeholder="Nationality"></input>
							</div>

						</div>


						<div class="form-group">
							<!-- <label class="col-md-4 col-sm-4 text-right control-label">Nationality</label> -->

							<div class="col-md-10 col-sm-10 col-md-offset-1">
								<input class="form-control" type="number" name="nationality" placeholder="Weight"></input>
							</div>

						</div>
							
						</div>

						<!-- Right input end -->

						
							
						<div class="form-group">
							
								<div class="col-md-12 col-sm-12 col-xm-12" >

									

									<div class="col-md-4 col-sm-4 col-xm-4 col-md-offset-2">

										<a href="login" class="form-control text-center log-in">Log In</a>
									
									</div>

									<div class="col-md-4 col-sm-4 col-xm-4">
										
									</div>

									<div class="col-md-4 col-sm-4 col-xm-4">
										<input class="form-control " type="submit" name="submit" value="Create Account">
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