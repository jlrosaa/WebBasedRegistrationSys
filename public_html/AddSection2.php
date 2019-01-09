<?php
session_start();

$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');


// Add Section
if (isset($_POST['AddSection'])) {
  // receive all input values from the form

 

$CourseNumber =$_POST['CourseNumber'];
   
  $BuildingName =$_POST['BuildingName'];
  
  $RoomNumber = $_POST['RoomNumber'];
  
  $Course =$_POST['Course'];
 
  $TimeSlot =$_POST['TimeSlot'];
 
   $Semester =$_POST['Semester'];
 

  $Year = $_POST['Year'];

  $Professor =$_POST['Professor'];
  
  $Days =$_POST['Days'];
  
  $Credits =$_POST['Credits'];


$w="SELECT CourseId FROM Courses WHERE Course='$Course'";




 



  	  $result=mysqli_query($db, $w);
 
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
$here= $row['CourseId'];
     
      
      
      
$roomNumber="SELECT * FROM Section";     
      
      $result1=mysqli_query($db, $roomNumber);     
      
      
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);     
  


		
	
	/*
	
	 

$CourseNumber =$_POST['CourseNumber'];
   
  $BuildingName =$_POST['BuildingName'];
  
  $RoomNumber = $_POST['RoomNumber'];
  
  $Course =$_POST['Course'];
 
  $TimeSlot =$_POST['TimeSlot'];
 
   $Semester =$_POST['Semester'];
 

  $Year = $_POST['Year'];

  $Professor =$_POST['Professor'];
  
  $Days =$_POST['Days'];
  
  $Credits =$_POST['Credits'];

	
	
	*/
	
	$match=false;
	
	
	
	//cannot have same room at the same time in the same buidling occupied by more than one class.
	while($row1 = $result1->fetch_assoc()){
	
	
	
	if($RoomNumber===$row1["RoomNumber"] && $TimeSlot===$row1["TimeSlot"] && $BuildingName===$row1["BuildingName"] )	{
	
	
	$match=true;
	
	
	
	
	
	}
	
	
	
	
	//Once the professor is assigned a time during the week to teach they cannot be schedule elsewhere because they cannot be in two places at once.
	if($Professor===$row1["Professor"] &&  $TimeSlot===$row1["TimeSlot"] && $Days===$row1["Days"]){
	
	
		
	$match=true;
	
	
	
	
	}

	
	

	
		
	if($RoomNumber===$row1["RoomNumber"] && $BuildingName===$row1["BuildingName"] && $Days===$row1["Days"] && $TimeSlot===$row1["TimeSlot"]){
	
	
	$match=true;
	
	}
	
	
	
	
	
	
	
	
	
	if($Professor===$row1["Professor"] &&  $TimeSlot===$row1["TimeSlot"] && $Days===$row1["Days"]){
	
	
		
	$match=true;
	
	
	
	
	}
	//once a specific room is booked at a certain place, during a certain day at a certain time it cannot be booked by another section

	
	
	
	
	
	

	
	
	
	}
	
	
	if($match===false){
	
		
  $query = "INSERT INTO Section (CourseId,BuildingName, RoomNumber, Course, TimeSlot, Semester, Year, Professor, Days, Credits) VALUES ($here,'$BuildingName','$RoomNumber','$Course','$TimeSlot','$Semester','$Year','$Professor','$Days','$Credits')";
  
  
  	  mysqli_query($db, $query); 		
 		$message = "Success";
echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		
	header("location: Admin_Home.php");	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
		
		







}
  	 
 
 
  
		 	


  	
 
  
