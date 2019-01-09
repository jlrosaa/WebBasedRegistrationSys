<?php
session_start();
$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
$sql = "SELECT * FROM Users WHERE Type='Student'";
$result =   mysqli_query($db, $sql);






?>




<!DOCTYPE html>
<html>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">







<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUNY Gold Edit User</title>
	<style type="text/css">* 
{
    box-sizing: border-box;
}

body 
{
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header */
.header 
{
    padding: 30px;
    text-align: center;
    background: white;
}

.header h1 
{
    font-size: 50px;
}

/* navigation bar */
.topnav 
{
    overflow: hidden;
    background-color: #333;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* nav links */
.topnav a 
{
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: orange;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* hover */
.topnav a:hover 
{
    background-color: gold;
    color: white;
}


/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn 
{
    <div id="outer">
  <div id="inner">Stuff to center</div>
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg 
{
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card 
{
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after 
{
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer 
{
    padding: 20px;
    text-align: center;
    background: #ffc04c;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}
	</style>
	
	<script>
	function validateform()                                    
{ 

     
   
    var UserId = document.forms["SendtoSearchDepartment"]["userid"]; 

 



   

    if (UserId.value == "")                               
    { 
        window.alert("Please enter a Valid User Id "); 
       	Course.focus(); 
        return false; 
    } 
    
    
  
	
	</script>
	
	
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>







<div class="header">
<h1><img src="https://i.imgur.com/B8OB1oQ.png" /></h1>
</div>

<div class="topnav"><a href="/Faculty_Home.php">Home </a> <a href="/Faculty_Registration.php">Registration</a>

<div class="dropdown"><button class="dropbtn">Academics</button>

<div class="dropdown-content"><a href="/DepartmentList.html">List of Departments</a> <a href="/AcademicInformation.html">Academic Information</a><a href="/ImportantDates.html">Important Dates/Deadlines</a><a href="/TranscriptFunctions.php">Transcript Functions</a></div>
</div>

<div class="dropdown"><button class="dropbtn">Admin Menu</button>

<div class="dropdown-content"><a href="/CourseFunctions.php">Course Functions</a> <a href="UserFunctions.php">User Functions</a><a href="/TimeslotFunctions.php">Timeslot Functions</a><a href="/LocationFunctions.php">Location Functions</a></div>
</div>
<a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>

<div class="footer">
<h2>Drop a Student From a Course</h2>
<div class="rightcolumn">
<div class="card">

<table border="1">
<caption><h2 style="text-align:center">SUNY GOLD Users</h2></caption>

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








<form name="SeeStudentsSections" method="post" action="FacultyViewSectionsofStudent.php" onSubmit="validateform()">
  
  
  <div class="input-group" >
  	  <label><b>Enter User ID of Student you wish to Drop Classes for:</b></label>
  	  <input type="text" name="userid">
  	</div>
  	
	
  	
  
  
    	  
  <button type="submit" class="btn btn-outline-primary" name="SeeStudentsSections">Submit</button>
  	  	  
  
  
  	</div>
  	</div>
  	</div>
  	</div>

</div>
</div>
</div>
</form>
</body>
</html>
