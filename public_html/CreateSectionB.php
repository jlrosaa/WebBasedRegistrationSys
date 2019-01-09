<?php include('AddSection2.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUNY Gold Create Section</title>
	
<script>
	function validateform()                                    
{ 

        
    var CourseId = document.forms["AddSection"]["CourseId"]; 
   
    var RoomNumber = document.forms["AddSection"]["RoomNumber"]; 
    var Course = document.forms["AddSection"]["Course"]; 
    var TimeSlot = document.forms["AddSection"]["TimeSlot"]; 
    var Semester = document.forms["AddSection"]["Semester"]; 
    var Year = document.forms["AddSection"]["Year"]; 
    var Professor = document.forms["AddSection"]["Professor"]; 
    var Days = document.forms["AddSection"]["Days"]; 
    var Credits = document.forms["AddSection"]["Credits"]; 
    var CourseNumber = document.forms["AddSection"]["CourseNumber"]; 
                            


   

    if (CourseId.value == "")                               
    { 
        window.alert("Please enter a CourseId"); 
       	Course.focus(); 
        return false; 
    } 
   
    
       if (RoomNumber.value == "")                               
    { 
        window.alert("Please enter a Room Number"); 
        RoomNumber.focus(); 
        return false; 
    } 
    
          if (Course.value == "")                               
    { 
        window.alert("Please enter a Course"); 
       Course.focus(); 
        return false; 
    } 
    
 
       if (TimeSlot.value == "")                               
    { 
        window.alert("Please enter a TimeSlot"); 
        TimeSlot.focus(); 
        return false; 
    } 
    
 if (Semester.value == "")                               
    { 
        window.alert("Please enter a Semester"); 
      Semester.focus(); 
        return false; 
    } 
    
     if (Year.value == "")                               
    { 
        window.alert("Please enter a Year"); 
        Year.focus(); 
        return false; 
    } 
     if (Professor.value == "")                               
    { 
        window.alert("Please enter a Professor"); 
        CourseNumber.focus(); 
        return false; 
    } 
     if (Days.value == "")                               
    { 
        window.alert("Please enter a Day"); 
      Days.focus(); 
        return false; 
    } 
     if (Credits.value == "")                               
    { 
        window.alert("Please enter number of credits"); 
        Credits.focus(); 
        return false; 
    } 
     if (CourseNumber.value == "")                               
    { 
        window.alert("Please enter a Course Number"); 
        CourseNumber.focus(); 
        return false; 
    } 
 
 

    return true; 

}
</script>



	<style type="text/css">* 
{
    box-sizing: border-box;
}
   table,tr,th,td
            {
                border: 1px solid black;
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
</head>
<body>
<div class="header">
<h1><img src="https://i.imgur.com/B8OB1oQ.png" /></h1>
</div>
<div class="topnav"><a href="/Admin_Home.html">Home </a> <a href="/Admin_Registration.html">Registration</a>

<div class="dropdown"><button class="dropbtn">Academics</button>

<div class="dropdown-content"><a href="/DepartmentList.html">List of Departments</a> <a href="/AcademicInformation.html">Academic Information</a><a href="/ImportantDates.html">Important Dates/Deadlines</a><a href="/TranscriptFunctions.html">Transcript Functions</a></div>
</div>

<div class="dropdown"><button class="dropbtn">Admin Menu</button>

<div class="dropdown-content"><a href="/CourseFunctions.html">Course Functions</a> <a href="UserFunctions.html">User Functions</a><a href="/TimeslotFunctions.html">Timeslot Functions</a><a href="/LocationFunctions.html">Location Functions</a></div>
</div>
<a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>



<div class="footer">
<h2>Create a Section</h2>

<div class="rightcolumn">
<div class="card">



<form name="AddSection" form action="CreateSectionB.php" method="post" onSubmit="return validateform()"> 


<p><label for="txtList">Department: <input list="DeptName" name="DeptName" placeholder="Select a Department" type="text" /> <datalist id="DeptName"><option value="Biology"></option><option value="Business"></option><option value="Chemistry"></option><option value="Computer Science"></option><option value="Criminology"></option><option value="English"></option><option value="History"></option><option value="Law"></option><option value="Mathematics"></option><option value="Modern Languages"></option><option value="Music and Dance"></option><option value="Physics"></option><option value="Psychology"></option></datalist> </label></p>




<tr>
<td>Room Number:</td>

</tr>
<select name="RoomNumber">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT DISTINCT RoomNumber FROM Room");

while ($row = $sql->fetch_assoc())
{


echo "<option value='".$row["RoomNumber"]."'>" .$row['RoomNumber']."</option>";

}


?>

</select>






<p></p>



<tr>
<td>Building:</td>

</tr>
<select name="BuildingName">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT * FROM Building");

while ($row = $sql->fetch_assoc())
{


echo "<option value='".$row["BuildingName"]."'>" .$row['BuildingName']."</option>";

}


?>

</select>




<p></p>
<tr>
<td>Courses:</td>
<td>

<select name="Course">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql2 = mysqli_query($db, "SELECT * FROM Courses");

while ($row = $sql2->fetch_assoc())
{


echo "<option value='".$row["Course"]."'>" .$row['Course']."</option>";

}


?>

</select>


<p><label for="txtList">Semester: <input list="Semester" name="Semester" placeholder="Select a Semester" type="text" /> <datalist id="Semester"><option value="Fall"></option><option value="Winter"></option><option value="Spring"></option><option value="Summer"></datalist> </label></p>



<p><label>Year: <input name="Year" placeholder="Year" type="text" /> </label></p>




<tr>
<td>Professor:</td>

</tr>
<select name="Professor">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT FirstName,LastName FROM Users WHERE Type='Faculty'");

while ($row = $sql->fetch_assoc())
{


echo "<option value='".$row["FirstName"]. $row["LastName"]."'>" .$row['FirstName']. " " .$row['LastName']."</option>";

}


?>

</select>
<p></p>
<tr>
<td>TimeSlot:</td>

</tr>
<select name="TimeSlot">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT PeriodSlot FROM TimeSlot");

while ($row = $sql->fetch_assoc())
{


echo "<option value='".$row["PeriodSlot"]."'>" .$row['PeriodSlot']."</option>";

}


?>

</select>







<p><label>Days: <input name="Days" placeholder="Days" type="text" /> </label></p>


<p><label for="txtList">Credits: <input list="Credits" name="Credits" placeholder="Select Credits" type="text" /> <datalist id="Credits"><option value="2"></option><option value="3"></option><option value="4"></option></datalist> </label></p>











<p><button class="btn" name="AddSection" type="submit">Add Course</button><input type="reset" value="Clear" /></p>


</form>

 
</div>
</div>
</div>
</div>
</form>
</body>
</html>