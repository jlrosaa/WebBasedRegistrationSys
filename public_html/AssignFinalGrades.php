<?php include('FinalGrade.php') ?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUNY Gold Assign Final Grades</title>
	
<script>
	function validateform()                                    
{ 
   
    var Course = document.forms["AssignGrades"]["Course"];                 
    var UserId= document.forms["AssignGrades"]["UserId"];  
    var Grade=document.forms["AssignGrades"]["Grade"];
   
 
    
   


   
    if (Course.value == "")                               
    { 
        window.alert("Please select a course"); 
        Course.focus(); 
        return false; 
    } 
    if (UserId.value == "")                               
    { 
        window.alert("Please select a student"); 
       	UserId.focus(); 
        return false; 
    } 
        if (Grade.value == "")                               
    { 
        window.alert("Please enter a grade"); 
        Grade.focus(); 
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

/* hover */
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
<div class="topnav"><a href="/Faculty_Home.php">Home </a> <a href="/Faculty_Registration.php">Registration</a>

<div class="dropdown"><button class="dropbtn">Academics</button>

<div class="dropdown-content"><a href="/DepartmentList.html">List of Departments</a> <a href="/AcademicInformation.html">Academic Information</a><a href="/ImportantDates.html">Important Dates/Deadlines</a><a href="/TranscriptFunctions.html">Transcript Functions</a></div>
</div>

<div class="dropdown"><button class="dropbtn">Admin Menu</button>

<div class="dropdown-content"><a href="/CourseFunctions.php">Course Functions</a> <a href="UserFunctions.php">User Functions</a><a href="/TimeslotFunctions.php">Timeslot Functions</a><a href="/LocationFunctions.php">Location Functions</a></div>
</div>
<a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>
<div class="footer">
<h2>Assign Final Grade</h2>

<div class="rightcolumn">
<div class="card">

<form name="Assign" form action="AssignFinalGrades.php" method="post" onSubmit="return validateform()"> 



<tr>
<td>Semester:</td>
<td>
<select name="Semester">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT Distinct Semester FROM Enrolled");

while ($row = $sql->fetch_assoc())
{

echo "<option value='".$row["Semester"]."'>". $row['Semester'] . "</option>";


}
?>

</select>
</td>
</tr>

<p>
<tr>
<td>CourseId:</td>
<td>
<select name="CourseId">
 <option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT Distinct CourseId FROM Courses");

while ($row = $sql->fetch_assoc())
{

echo "<option value='".$row["CourseId"]."'>". $row['CourseId'] . "</option>";


}
?>

</select>
</td>
</tr>
</p>

<p>
<td>StudentId:</td>
<td>
<select name="UserId">
 <option disabled selected value> -- Select a student -- </option>
<?php 

$sql = mysqli_query($db, "SELECT UserId FROM Users WHERE Type='Student'");

while ($row = $sql->fetch_assoc())
{

echo "<option value='".$row["UserId"]."'>". $row['UserId'] . "</option>";


}
?>
</select>
</td>
</p>

<p><label>Grade: <input name="Grade" placeholder="Grade" type="text" /> </label></p>





<p><button class="btn" name="AssignFinalGrade" type="submit">Assign Final Grades</button><input type="reset" value="Clear" /></p>


</form>

 
</div>
</div>
</div>
</div>
</form>
</body>
</html>