<?php

echo "string";

include("../library/connectdb.php");

if(isset($_POST['second_submit'])){

	$slot_count = count($_POST['time_slot_array_start']);


	for($i=0,$j=0;$i<$slot_count;$i++,$j++)
	{
		$start[$i]= $_POST['time_slot_array_start'][$i];
		$end[$j]= $_POST['time_slot_array_end'][$j];
	}

	if(isset($_POST['second_submit']))
	{
		@$schedule = "INSERT INTO appoinment(slot_1_start,slot_1_end,slot_2_start,slot_2_end,slot_3_start,slot_3_end,num_of_slot) VALUES ('$start[0]','$end[0]','$start[1]','$end[1]','$start[2]','$end[2]','$slot_count')";

		$obj = new Connection();
		$obj->cn->query($schedule);
	}

	

	header('Location: login');

	
}


?>