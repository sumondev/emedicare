$(document).ready(function() {

//  Appoinment availablity ck
	
	// for slot1

	$("#slot1").click(function(){
		$("#available_seat").load("../citizen/cavailablity.php").hide().fadeIn();
	});



	// $("#patient_available").load("../citizen/cavailablity1.php").hide().fadeIn();

			
	$("#a").click(function(){
		confirm("Are u sure?").hide().fadeIn();;
		// alert("Are u sure?");

	});

// Appoinment end

     $("#profile").click(function(){
	 	$("#load_content_here").load("../citizen/cprofile.php").hide().fadeIn();

	});


     $("#patient").click(function(){
	 	$("#load_content_here").load("../doctor/dpatient.php").hide().fadeIn();

	});


     // Code for appoinment mechanism

     $("#go").click(function(){

     	if( $("#slot").val() != '' && $("#slot").val() != 0)
     	{
     		var x = $("#slot").val();
     		$("#slot").val('');

     		$("#time_slot").empty();

     		$("#time_slot").append('\
     						\
     						<div class="">\
								<div class="form-group">\
									<div class="col-md-4">\
										\
									</div>\
									\
									<div class="col-md-4">\
										<h3>Start Time<hr></h3>\
									</div>\
									<div class="col-md-4">\
										<h3>End Time<hr></h3>\
									</div>\
								</div>\
							</div>\
					').hide().fadeIn();

     		for(i=0; i<x; i++)
     		{
     			$("#time_slot").append('\
     						\
     						<div class="">\
								<div class="form-group">\
									<label class="col-md-4 text-right control-label">Time slot : '+(i+1)+'</label>\
									<div class="col-md-4">\
										<input class="form-control" type="text" placeholder="Hour:Minute" name="time_slot_array_start[]" required="">\
									</div>\
									<div class="col-md-4">\
										<input class="form-control" type="text" placeholder="Hour:Minute" name="time_slot_array_end[]" required="">\
									</div>\
								</div>\
							</div>\
					').hide().fadeIn();
     		}
     		
     	}

     	// else if($("#slot").val() == '' && $("#slot").val() == 0)
     	// {
     	// 	$("#time_slot").html("Enter your time slot");
     	// }
	 	
	 	$("#rset").click(function(){
	 		$("#time_slot").empty();
	 	});

	});




     $(".load-profile").load("../citizen/c2c.php");

     // $(".jumbotron").hide().fadeIn(1500);
     $(".jumbotron").animate({top:'150px'},1000);

     $(".main").hide().fadeIn(1500);


     // Code for multilevel doctor sign up and appointment schedule end

     // Code for applying appointment

     
  
});


  
// });