<?php
session_start();


// connect to the database
$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');


// Add Room
if (isset($_POST['AddHold'])) {
  // receive all input values from the form
  $UserId =$_POST["UserId"];
  $HoldType=$_POST['HoldType'];

//Gets student email to insert into hold
$Email="SELECT Email FROM Students WHERE UserId='$UserId'";
$result=mysqli_query($db, $Email);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
  

$Email2= $row['Email'];

 
 
 $sql= "SELECT * FROM CurrentHolds WHERE UserId ='$UserId' AND HoldType ='$HoldType'";
    	
   $result = mysqli_query($db,$sql);
     
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count>0)
      
      {
      
     		echo "This hold already exists.";
      
      
      }
      
    else if($UserId >0)
     {  
 
 
      
      $query = "INSERT INTO CurrentHolds(UserId,Email, HoldType) 
  			 VALUES('$UserId','$Email2','$HoldType')";
  		
  			 mysqli_query($db, $query);
  			 
  			 
  		}	  

	
  	
  }
