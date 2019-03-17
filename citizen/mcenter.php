
	<?php
	
	include("../library/connectdb.php");
	include ("citizen.php");

	$run = new connection();
	$query = "SELECT * FROM mcenter";
	$mcenter = $run->cn->query($query);

	echo "<div class='panel panel-default'>";

		echo "<div class='panel-heading text-center doctitle'>";
			echo "<h4>Medical Service Centers</h4>";
		echo "</div>";
	
	echo "</div>";

	

	echo '

		<div class="col-md-10">
			<div class="row">';

			
			while($row = $mcenter->fetch_assoc())
			{
					echo '
						<div class="col-md-4">
							<div class="panel panel-default">

								<div class="panel-heading doctitle text-center">

										'.$row['name'].'

								</div>
								<div class="panel-body">

								<img src="../img/mcenter/mcenter3.jpg" width="100%"/>

								<hr/>

									<div class="col-md-6">
										Email : '.$row['email'].'<hr>
										Contact num: '.$row['contact'].'
									</div>


									<div class="col-md-6">
										Address :'.$row['address'].'<hr>
										Country : '.$row['country'].'

									</div>
									
								</div>
								
							</div>

							<div class="text-center">
								<a class="btn btn-info" href="mrequest/'.$row['mcenter_id'].'">Test request</a>
							</div>
							
						</div>

					';

			}
				

	echo '
			</div>
		</div>


	';




?>

