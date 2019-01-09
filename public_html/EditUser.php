<?php include('EditUserData.php') ?>
<?php
session_start();
$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
$sql = "SELECT * FROM Users";
$result =   mysqli_query($db, $sql);
?>

<!DOCTYPE html
<html>
<head>


 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">







  <title>Edit Users</title>



</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





<table border="1">
<caption><h2>SUNY GOLD Users</h2></caption>

<table class="table table-hover table-dark">





<thead>
<tr>
<td>UserId</td>
<td>Type</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>


</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc())
{
?>

<tr>
<td><?php echo $row["UserId"];?></td>
<td><?php echo $row["Type"];?></td>
<td><?php echo $row["FirstName"];?></td>
<td><?php echo $row["LastName"];?></td>
<td><?php echo $row["Email"];?></td>

</tr>

<?php
}
?>

</table>
<form method="post" action="EditUser.php">
  
  
  <div class="input-group" >
  	  <label>Enter User Id of Student you wish to edit</label>
  	  <input type="text" name="userid">
  	</div>
  	
	<div class="input-group" >
  	  <label>Enter Desired Email</label>
  	  <input type="text" name="email">
  	</div>
  	<div>
  	<p><label for="txtList">User Type: <input list="Users" name="type" placeholder="Select a User type" type="text" /> <datalist id="Users"><option value="Admin"></option><option value="Faculty"></option><option value="Student"></option><option value="Researcher"></option></datalist> </label></p>
  	</div>
  
  
  
  
    
  	
  <button type="submit" class="btn btn-outline-primary" name="UpdateUser">Submit</button>  
  	 
  	</div>
  	
  
  
  
  </form>
  
  
  
  



</body>
</html>
