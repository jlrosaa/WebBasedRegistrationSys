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
	$Value="SELECT Year,Semester,Credits,TimeSlot FROM Section WHERE CRN='$CRN'";
	$r= mysqli_query($db,$Value);

	$row = mysqli_fetch_array($r,MYSQLI_ASSOC);
      
  

	$CYear= $row['Year'];
	$CSemester= $row['Semester'];
	$CCredits= $row['Credits'];
	$CTimeSlot= $row['TimeSlot'];
	
	//holds
	$sql_Hold= "SELECT UserId FROM CurrentHolds WHERE UserId='$UserId'";
    	
   	$result1 = mysqli_query($db,$sql_Hold);
   	//duplicate classes
   	$sql_Duplicate = "SELECT * FROM Enrolled WHERE UserId='$UserId' AND CRN = '$CRN'";
    	
 	$result2 = mysqli_query($db,$sql_Duplicate);
 	//max credits
 	$sql_Credits = "SELECT SUM(Credits) FROM Enrolled WHERE UserId='$UserId' AND Grade = 'i'";
 	
 	$result3 = mysqli_query($db,$sql_Credits);
 	
	
  	
     	//Checks for student holds
     	if (mysqli_num_rows($result1) > 0)
     	{
     		echo "Unable to register for course. There is a hold on your account. ";
    	}
  
      	//checks for duplicate enrollment
    	elseif (mysqli_num_rows($result2) > 0)
     	{
     		    echo "You are already registered for this course.";    	
    	}
    	//max credits
    	elseif ((int) mysqli_fetch_array($result3) >20)
     	{
     		
     		    echo "You can't exceed max credit amount.";    	
    	}
   
      	else{
		
		$query2 = "INSERT INTO Enrolled (CRN, UserId, Year, Semester, Grade, Credits) 
  			 VALUES('$CRN','$UserId','$CYear','$CSemester','i','$CCredits')";
  		
  			 mysqli_query($db, $query2);
  		}
  	}
?>
