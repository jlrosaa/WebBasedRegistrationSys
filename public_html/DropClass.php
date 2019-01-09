<?php
session_start();
    
    
    //selects user email
    $SelectEmail = $_SESSION['email'];
    $db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    $sql2= "SELECT UserId FROM Users WHERE Email='$SelectEmail'";
        
    $result = mysqli_query($db,$sql2);
   
        
    $row =mysqli_fetch_array($result,MYSQLI_ASSOC);

    $UserId = $row['UserId'];

   

$query22 ="SELECT Enrolled.CRN, Enrolled.Semester, Enrolled.Year,Section.Course, Section.Credits,  Section.Professor, Section.TimeSlot, Section.BuildingName,Section.Days
FROM Enrolled
LEFT JOIN Section ON Enrolled.CRN = Section.CRN
WHERE UserId ='$UserId'";
        
$search_result2 = filterTable($query22);
    

     
    function filterTable($query22)
    {
      	$connect = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$filter_Result = mysqli_query($connect, $query22);
    	return $filter_Result;
    }
    
   
if (isset($_POST['Drop'])) 
	
	{
	

    $db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');

	
	$CRN = $_POST['CRN'];
	
    	$query="DELETE from Enrolled WHERE CRN = '$CRN' AND UserId ='$UserId'";
    	
    	 mysqli_query($db, $query);
    	 
    	  $UpdateSeats= "UPDATE Section SET SeatsTaken=SeatsTaken-1 WHERE CRN='$CRN'";
  			 
  	  mysqli_query($db, $UpdateSeats); 
    	}
?>
