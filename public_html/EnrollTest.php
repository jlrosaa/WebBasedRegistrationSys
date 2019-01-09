<?php
session_start();
	

	
	
	
	
	
	
	
	//selects user email
	$SelectEmail = $_SESSION['email'];
	$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
 	$sql2= "SELECT UserId FROM Users WHERE Email='$SelectEmail'";
    	
   	$result = mysqli_query($db,$sql2);
  	//$CRN =$_POST['CRN'];
      	
	$row =mysqli_fetch_array($result,MYSQLI_ASSOC);

	$UserId = $row['UserId'];

	//search semesters
	function search_semester()
  	{
  		$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
		$sql = mysqli_query($db, "SELECT DISTINCT Semester FROM Section");
	
		while ($row = $sql->fetch_assoc())
		{

		echo "<option value='".$row["Semester"]."'>". $row['Semester'] . "</option>";

		}
	}
	
 
	//search for available years
	function search_year()
  	{
  		$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
		$sql = mysqli_query($db, "SELECT DISTINCT Year FROM Section");
	
		while ($row = $sql->fetch_assoc())
		{

		echo "<option value='".$row["Year"]."'>". $row['Year'] . "</option>";

		}
	}
	
	
	//searches for available courses
	function search_course()
  	{
  		$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
		$sql = mysqli_query($db, "SELECT Course FROM Section");
	
		while ($row = $sql->fetch_assoc())
		{

		echo "<option value='".$row["Course"]."'>". $row['Course'] . "</option>";

		}
	}

  	

    	$Course = $_POST['Course'];
    	$Year= $_POST['Year'];
    	$Semester = $_POST['Semester'];
    	$query = "SELECT * FROM Section WHERE Course = '$Course' AND Year = '$Year' AND Semester = '$Semester'";
    	$search_result = filterTable($query);
    

	 
	function filterTable($query)
	{
    	$connect = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$filter_Result = mysqli_query($connect, $query);
    	return $filter_Result;
	}
	

	if (isset($_POST['add'])) 
	
	{
	//Stores CRN
	$CRN =$_POST['CRN'];
	
	//Get specific CRN values
	$Value="SELECT CourseId,Year,Semester,Credits,TimeSlot FROM Section WHERE CRN='$CRN'";
	$r= mysqli_query($db,$Value);

	$row = mysqli_fetch_array($r,MYSQLI_ASSOC);
      
  
	$CCourseId= $row['CourseId'];
	$CYear= $row['Year'];
	$CSemester= $row['Semester'];
	$CCredits= $row['Credits'];
	$CTimeSlot= $row['TimeSlot'];
	
	//holds
	$sql_Hold= "SELECT UserId FROM CurrentHolds WHERE UserId='$UserId'";
    	
   	$result1 = mysqli_query($db,$sql_Hold);
   	//duplicate classes
   	$sql_Duplicate = "SELECT * FROM Enrolled WHERE UserId='$UserId' AND CourseId = '$CCourseId'";
    	
 	$result2 = mysqli_query($db,$sql_Duplicate);
 	
 	//max credits
 	$sql_Credits = "SELECT SUM(Credits) AS count FROM Enrolled WHERE UserId='$UserId' AND Year = '$CYear' AND Semester ='$CSemester'";
 	
 	$NumCredits= mysqli_query($db,$sql_Credits);
 	
 	$c = mysqli_fetch_array($NumCredits,MYSQLI_ASSOC);
 	
 	$newc= $c['count'];
 	
 	$int = (int)$newc;
 	$int2 = (int)$CCredits;
 	$int3 = (int) 0;
 	
 	$int3 = $int + $int2;
 	
 	//timeslot
 	
	
	$Times = "SELECT CRN FROM Enrolled WHERE UserId = '$UserId'";
	$query11= mysqli_query($db,$Times);
	
 	$row11 = mysqli_fetch_array($query11,MYSQLI_ASSOC);
	foreach($row11 as $r => $value) 
	{
  	
 	$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$TimeSlot = "SELECT TimeSlot FROM Section WHERE CRN = '$value'";
    	$query22= mysqli_query($db,$TimeSlot);
    	
    	$array3= mysqli_fetch_array($query22);
    	
    	$val2= $array3['TimeSlot'];
    
    	
	if($val2 = $CTimeSlot)
	{ 
		$result5 ++;
		
	}
	else
	{
		continue;
		
	}
	
	
	}
 	
 	
 	//prereq
 	
 	$Prereq = "SELECT PreReqId FROM PreReq WHERE CourseId ='$CCourseId'";
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
	else
	{
		continue;
		
	}
	
	
	}	
	
	//
	$getNumbSeats="SELECT SeatsTaken From Section WHERE CRN='$CRN'";
      
       	$resultofGetNumbSeats= mysqli_query($db,$getNumbSeats); 
       
        $row9 = mysqli_fetch_array($resultofGetNumbSeats,MYSQLI_ASSOC);


	$NumbSeats=(int)$row9['SeatsTaken'];

     	//Checks for student holds
     	
     	if (mysqli_num_rows($result1) > 0)
     	{
     		echo "Unable to register for course. There is a hold on your account.";
    	}
  
      	//checks for duplicate enrollment
    	elseif (mysqli_num_rows($result2) > 0)
     	{
     		    echo "You are already registered for this course.";    	
    	}
    	//max credits
    	elseif (($int3) > 16)
     	{
     		
     		    echo "You can't exceed max credit amount of 16.";    	
    	}
   	
   
   	//check for prereq
   	
	 elseif  (($result4) > 0)
	{
		
     		
     		   echo "You don't have the neseccary prerequisites to enroll in this course.";  
     		      
  	}
  	
  	
  	//
  	elseif(($result5 ) > 0)
  	
  	{
	echo "Sorry you are already enrolled in a class during this time period";
  	}
  	
  	  //seat increment
      
      
      elseif($NumbSeats+1>30)
      {
      
      
      echo "Sorry but there are no seats left in this class";
      
      
      }
   
  	//Check
  	
  	
      	else
      	{
		
		$query7 = "INSERT INTO Enrolled (CRN, CourseId, UserId, Year, Semester, Grade, Credits) 
  			 VALUES('$CRN','$CCourseId','$UserId','$CYear','$CSemester','i','$int2')";
  		
  			 mysqli_query($db, $query7);
  			 
  			 
  			 $UpdateSeats= "UPDATE Section SET SeatsTaken=SeatsTaken+1 WHERE CRN='$CRN'";
  			 
  			  mysqli_query($db, $UpdateSeats); 	 			 
  			  			 		 			 
  			
  			 
  	}
  	
  	
  		

  }
  	   $query222 ="SELECT Section.Course, Section.Credits, Enrolled.Semester, Enrolled.Year, Section.Professor, Section.TimeSlot, Section.BuildingName, Section.Days
FROM Enrolled
LEFT JOIN Section ON Enrolled.CRN = Section.CRN
WHERE UserId ='$UserId'";
        
     
        $search_result2 = filterTable2($query222);
    

     
    function filterTable2($query222)
    {
      	$connect = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$filter_Result = mysqli_query($connect, $query222);
    	return $filter_Result;
    }
	
 

?>
