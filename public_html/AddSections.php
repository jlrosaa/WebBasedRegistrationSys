<?php include('AddSection.php') ?>
<?php
session_start();
$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
$sql = "SELECT * FROM Course";
$result =   mysqli_query($db, $sql);
?>

<!DOCTYPE html
<html>
<head>
  <title>Add Section</title>

</head>
<body>
<table border="1">
<caption><h2>SUNY GOLD Courses</h2></caption>
<thead>
<tr>
<td>CourseId</td>
<td>Course</td>
<td>DeptName</td>
<td>Credits</td>
<td>Hours</td>
<td>Days</td>
<td>Building</td>
</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc())
{
?>

<tr>
<td><?php echo $row["CourseId"];?></td>
<td><?php echo $row["Course"];?></td>
<td><?php echo $row["DeptName"];?></td>
<td><?php echo $row["Credits"];?></td>
<td><?php echo $row["TimeSlot"];?></td>
<td><?php echo $row["Days"];?></td>
<td><?php echo $row["Building"];?></td>
</tr>

<?php
}
?>

</table>
<form method="post" action="DisplayCourses.php">
  

  	<div class="input-group" >
  	  <label>Enter the ID of the Course You want to Add</label>
  	  <input type="text" name="CourseId">
  	
  	 <p><label for = "txtList">Select Semester:
            <input type = "text" name = "Semester" 
               placeholder = "Select a Semester" list = "Users" />
            <datalist id = "Users">
               <option value = "Fall">
               <option value = "Winter">
               <option value = "Spring">
               <option value = "Summer">  
            </datalist>
         </label></p>
         
    	<p><label>Room Number
            <input type = "text" name = "RoomNumber" 
               placeholder = "Room Number" /> 
           </label></p>
  
  	<p><label>Year
            <input type = "text" name = "Year" 
               placeholder = "Year" /> 
           </label></p>
           
           <p><label>Professor
            <input type = "text" name = "Professor" 
               placeholder = "Professor" /> 
           </label></p>
           
           <p><label>Room Number
            <input type = "text" name = "Room Number" 
               placeholder = "RoomNumber" /> 
           </label></p>
           
           </div>
  	  <button type="submit" class="btn" name="AddSection">Add Section</button>
  	</div>
           
  
  
  
  </form>
  
  
  
  



</body>
</html>
