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



<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUNY Gold Admin Home</title>
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
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg 
{
    background-color: #ffc04c;
    width: 90%;
    padding: 20px;
}

.card
{
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}


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
    background: #ddd;
    margin-top: 20px;
}


@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

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

<div class="topnav"><a href="/Admin_Home.php">Home </a> <a href="/Admin_Registration.php">Registration</a>

<div class="dropdown"><button class="dropbtn">Academics</button>

<div class="dropdown-content"><a href="/DepartmentList.html">List of Departments</a> <a href="/AdminMenuAcademicInformation.php">Academic Information</a><a href="/AdminImportantDates.php">Important Dates/Deadlines</a><a href="/TranscriptFunctions.php">Transcript Functions</a></div>
</div>

<div class="dropdown"><button class="dropbtn">Admin Menu</button>

<div class="dropdown-content"><a href="/CourseFunctions.php">Course Functions</a> <a href="/HoldFunctions.php">Hold Functions</a> <a href="/LocationFunctions.php">Location Functions</a> <a href="/TimeslotFunctions.php">Timeslot Functions</a><a href="UserFunctions.php">User Functions</a></div>
</div>
<a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>

<div class="row">
<div class="leftcolumn">
<div class="card">
<h2><?php echo "Welcome" . " " . $firstname. " " . $lastname?></h2>

<div class="fakeimg" style="height:300px;"><img src="https://med.virginia.edu/administrator-development/wp-content/uploads/sites/299/2015/11/admin-leadership-conf.jpeg" /></div>

<p>Enjoy the ease of use that our new online portal provides! If you experience technical difficulties, please contact <b>tech@sunygold.net.</b></p>

<p>.</p>
</div>

<div class="card">
<h2>SUNY Gold Updates</h2>

<div class="fakeimg" style="height:350px;"><img src="https://www.sierracollege.edu/assets/img/content/about/visit-us/rocklin-quad-1000x300.jpg" /></div>

<p><b><i>10/14/18:</i></b> New courses added for Spring 2019!<br />
<b><i>10/12/18:</i></b> We are pleased to introduce a new department, <i>Music and Dance!</i><br />
<b><i>10/09/18:</i></b> Online portal officially released! Students, faculty, research staff, and administrators can now enjoy the ease of access to school resources!</p>

<p></p>
</div>
</div>

<div class="rightcolumn">
<div class="card">
<h2>SUNY Gold Contact Information</h2>

<div class="fakeimg" style="height:100px;"><b>Information Services:</b> tech@sunygold.net<br />
<b>Registrar:</b> registrar@sunygold.net<br />
<b>Health Services:</b> health@sunygold.net<br />
<b>Dean of Students:</b> dean@sunygold.net</div>
</div>
</div>
</div>
</body>
</html>