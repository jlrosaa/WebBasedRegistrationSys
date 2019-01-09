<?php
session_start();

	
	$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');

// REGISTER USER
if (isset($_POST['AdminDropStudent'])) {
  // receive all input values from the form
 
  $CRN=$_POST['crn'];
  
  
  }
 
      
  


  
   
$UserId=$_SESSION['UserId'];
  
  
  
  
		$query2 = "DELETE FROM Enrolled WHERE CRN='$CRN' AND UserId='$UserId'";
  			 
  			 mysqli_query($db, $query2); 			 
  		 
  	 
  			$UpdateSeats= "UPDATE Section SET SeatsTaken=SeatsTaken-1 WHERE CRN='$CRN'";
  			 
  			  mysqli_query($db, $UpdateSeats); 	 			 
  			      
      
      
      
      
      
      
      ?>
