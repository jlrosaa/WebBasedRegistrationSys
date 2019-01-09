
	
	
	<?php
session_start();


$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');


if (isset($_POST['SearchTranscript'])) 
{

  
  
 
 
 /*$sql= "SELECT Course FROM Grades WHERE Course='$Course' AND SELECT UserId FROM Grades WHERE UserId='$UserId'";
    	
   $result = mysqli_query($db,$sql);
     
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);*/
      
    

      
      $query = "SELECT Course,Grade FROM Grades WHERE UserId='$UserId'"; 
  		
  			 mysqli_query($db, $query);
  			 
  		function filterTable($query)
	{
    	$connect = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$filter_Result = mysqli_query($connect, $query);
    	return $filter_Result;
	}
	
  		
		
		;
		
		
	
		
  
  
  

}
	
 	
 	
 	
?>
