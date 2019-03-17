
<base href="http://localhost/project/doctor/presctiption">


<?php

include ("doctor.php");
include("../library/connectdb.php");
$run = new connection();

$patient_id =  $_GET['pid'];
$_SESSION['current_pid'] =  $_GET['pid'];
$_SESSION['time'] = $_GET['btime'];



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<link href="../css/editor.css" type="text/css" rel="stylesheet"/>

	<script src="../js/editor.js"></script>

	<!-- for generating pdf -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

</head>
<body>

	<div class="col-md-10">
		<div class="col-md-5">
			<div class="panel panel-default p1">

				<div class="panel-heading text-center info">
					Patient info
				</div>

				<div class="panel-body">

					<!--  -->
						<?php


							$sql = "SELECT * FROM citizen Where medical_id = ".$patient_id;
							$this_patient = $run->cn->query($sql);
							
							while($row = $this_patient->fetch_assoc())
								
								{
									echo '
										
										<div class="col-md-9">
											Name : '.$row['first_name'].' 
											Gender: Male<hr/>								
											Age: '.$row['age'].'
										</div>


										<div class="col-md-3"> 
													<div class="panel panel-default img-padding">

														<div class="panel-body img-padding">
																												
															<div> 
																	<img src="../img/doctor/doc.jpg" width="100%" height="100px">
															</div>


														</div>
													
													</div>

			

											</div>

											<div class="text-center">
												<a class="btn btn-info" href="skype:username?call">Skype Call</a>
											
											</div>
			
									';

			
								}

						?>
					<!--  -->

				</div>
			</div>
		</div>

	<!-- Patints sysmptoms -->

	<div class="col-md-7">
			<div class="panel panel-default p2">

				<div class="panel-heading text-center doctitle">
					Symptoms
				</div>

				<div class="panel-body">

					<?php

							// Need more parameter to be specific
							$sql = "SELECT reson FROM schedule Where citizen_id = ".$patient_id;
							$this_patient = $run->cn->query($sql);
							
							while($row = $this_patient->fetch_assoc())
								
								{
									echo "1. ".$row['reson'];
			
								}

						?>
					
				</div>
			</div>
	</div>


	<div class="col-md-5">
			<div class="panel panel-default p3">

				<div class="panel-heading text-center doctitle">
					Patient history
				</div>

				<div class="panel-body">

					Patient history/ Medical test reports
					
				</div>
			</div>
	</div>


	<div class="col-md-7">
			<div class="panel panel-default p4">

				<div class="panel-heading text-center doctitle">
					Presctiption
				</div>

				<div class="panel-body">

					<div id="content">
						
					</div>

					<!-- ignore this div. its only for pdf making -->
					<div id="editor"></div>

					<div class="col-md-12">
						
						<div class="col-md-6">

							<div class="col-md-6"></div>

							<button class="btn btn-primary" id="pdf" style="margin-top: 5px;">Make PDF</button>
						</div>

						<!-- Sending prescription to a patient -->

						<div class="col-md-6">

							<form method="post" action="serve" enctype="multipart/form-data">
								
							<div class="col-md-6">
								
								<label>Prescription :</label>
								<input type="file" id="file" name="fileUpload" placeholder="Upload presctiption">
								</div>
								
								<div class="col-md-6">
									<button class="btn btn-primary" type="submit" name="submit" style="margin-top: 5px;">Send</button>
								</div>
							</form>

						</div>

					</div>
					
				</div>
			</div>
	</div>
		
	</div>

	<!-- JS -->

	<script type="text/javascript">

		$(document).ready( function() {

				// to make editor working

				$("#content").Editor(); 
				

				//making a pdf from editor 

				var doc = new jsPDF();
				var specialElementHandlers = {
				    
				    "#editor": function (element, renderer) {
				        return true;
				    }
				};

				$("#pdf").click(function () {   
				    doc.fromHTML($("#content").Editor("getText"), 15, 15, {
				        'width': 170,
				            'elementHandlers': specialElementHandlers
				    });

				    doc.save('Presctiption.pdf');
				});


				// 

		

		});

	</script>

</body>
</html>