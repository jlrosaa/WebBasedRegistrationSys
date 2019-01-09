<?php
session_start();


$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');


if (isset($_POST['DeclareMajor'])) 
{

  $Major =$_POST['Major'];
  $UserId =$_POST['UserId'];

  
 
 
 /*$sql= "SELECT Course FROM Grades WHERE Course='$Course' AND SELECT UserId FROM Grades WHERE UserId='$UserId'";
    	
   $result = mysqli_query($db,$sql);
     
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);*/
      
    

      
      $query = "INSERT INTO Majors (Major, UserId) 
  			 VALUES('$Major','$UserId')";
  		
  			 mysqli_query($db, $query);
  			 
  		
  		
		$message = "Major Declared";
echo "<script type='text/javascript'>alert('$message');</script>";
		
		;
		
		
	
		
  
  
  

}


