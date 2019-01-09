<?php
session_start();

	
	$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');

// REGISTER USER
if (isset($_POST['AdminRegisterStudent'])) {
  // receive all input values from the form
 
  $CRN=$_POST['crn'];
  
  $sql="SELECT * FROM Section WHERE CRN='$CRN'";
  

 
 
 
 $result= mysqli_query($db,$sql);


     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
  


$year=$row['Year'];

$credits=$row['Credits'];
  
  $semester=$row['Semester']; 
  
  
 $CourseId=$_SESSION['CourseId'];
$UserId=$_SESSION['UserId'];
  
    $sql2="SELECT * FROM CurrentHolds WHERE UserId='$UserId'";
  
  $sql3="SELECT Year, Semester, Credits FROM Enrolled Where UserId='$UserId'";
  
 $result2= mysqli_query($db,$sql3);


     $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
     
     $CYear=$row2['Year'];
     
     $CSemester=$row2['Semester'];
  
  $CCredits=$row2['Credits'];
  
  
   
 $result1= mysqli_query($db,$sql2);


     $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      
  
      $active = $row1['active'];
      
      $count = mysqli_num_rows($result1);
      
      	$sql_Credits = "SELECT SUM(Credits) AS count FROM Enrolled WHERE UserId='$UserId' AND Year = '$CYear' AND Semester ='$CSemester'";
 	
 	$NumCredits= mysqli_query($db,$sql_Credits);
 	
 	$c = mysqli_fetch_array($NumCredits,MYSQLI_ASSOC);
 	
 	$newc= $c['count'];
 	
 	$int = (int)$newc;
 	$int2 = (int)$CCredits;
 	$int3 = (int) 0;
 	
 	$int3 = $int + $int2;
 	
      
      
       $sql5= "SELECT CRN FROM Enrolled WHERE CRN='$CRN' AND UserId='$UserId'";
    	
   $result5 = mysqli_query($db,$sql5);
     
      $row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC);
     
      $active = $row5['active'];
      
      $count5 = mysqli_num_rows($result5);
      
      
      
      
          $Prereq = "SELECT PreReqId FROM PreReq WHERE CourseId ='$CourseId'";
 	$query1= mysqli_query($db,$Prereq);
 	//$array1 = mysqli_fetch_array($query1,MYSQLI_ASSOC);
 	//$v= $array1['PreReqId'];
 	
 	
 	$row = mysqli_fetch_array($query1,MYSQLI_ASSOC);
	foreach($row as $r => $value) 
	{
  	
 	$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$Grade = "SELECT Grade FROM Enrolled WHERE CourseId = '$value' AND UserId = '$UserId'";
    	$query2= mysqli_query($db,$Grade);
    	
    	$array2= mysqli_fetch_array($query2);
    	
    	$val= $array2['Grade'];
    
    	
	if($val != 'A' && $val != 'B' && $val != 'C')
	{ 
		$result4 ++;
		
		
	}
	

		continue;
		

  
  
  }
  
      
    
      
      
      
      
      
      
      
      
      
      
      
      if($count>0){
      
      echo "The User Has a Hold that prevents them from Enrolling in this section";
      
      
      }
      
   elseif($count5>0){
      
      echo "The User is already enrolled in this section";
      
      
      }
      
  
  
  elseif(($int3) > 16){
  
  
        
      echo "The current class that you're trying to enroll in will put you over the 16 credit, credit limit";
  
  
  
  }
  
   elseif  (($result4) > 0)
	{
		
     		
     		   echo "The student doesn't have the necessary prerequisites to enroll in this course.";  
     		      
  	}
    	
      
  
   $getNumbSeats="SELECT Seats Taken From Section WHERE CRN='$CRN'";
      
       $resultofGetNumbSeats= mysqli_query($db,$getNumbSeats); 
       
        $row9 = mysqli_fetch_array($resultofGetNumbSeats,MYSQLI_ASSOC);


$NumbSeats=(int)$row9['Seats Taken'];
      
      
      if($NumbSeats+1>30){
      
      
      echo "Sorry but there are no seats left in this class";
      
      
      }
   
  
  
  
  
  
  
  
  
  
  
  
  
  
  else{
  
		$query2 = "INSERT INTO Enrolled (CRN, UserId, Year, Semester, Grade, Credits, CourseId) 
  			 VALUES('$CRN','$UserId','$year','$semester','i','$credits','$CourseId')";
  			 
  			 mysqli_query($db, $query2); 	
  			 
  			 header("location:Faculty_Home.php"); 		
  				 
  			$UpdateSeats= "UPDATE Section SET SeatsTaken=SeatsTaken+1 WHERE CRN='$CRN'";
  			 
  			  mysqli_query($db, $UpdateSeats); 	 			 
  			  			 			 
  			 }	 		 
  		 
  
      }?>
