<?php include('DeleteCourseData.php') ?>

<?php
session_start();
$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
$sql = "SELECT * FROM Course";
$result =   mysqli_query($db, $sql);
?>
<?php
session_start();






	$type = $_SESSION['type'];

$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];

if($type!="Admin"){

session_destroy();
header("location: Login2.php");



}
?>

<!DOCTYPE html
<html>
<head>


<title>Delete Course</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
<table border="1" align="center">
<caption><h2>SUNY GOLD Sections</h2></caption>
<thead>
<tr>

<td>CourseId</td>
<td>Course</td>
<td>DeptName</td>
<td>Credits</td>
<td>TimeSlot</td>
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
<form method="post" action="DeleteCourses.php">
  

  	<div class="input-group" >
  	  <label>Enter the id of the course you wish to <em><b>Delete </b></em> in.</label>
  	  <input type="text" name="id">
  	</div>
  	
  	  



  	
  	
  	  <button type="submit" class="btn" name="DeleteCourse">Delete Course</button>
  	</div>
  </form>

</body>
</html>

  
	
