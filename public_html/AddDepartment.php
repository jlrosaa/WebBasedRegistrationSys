<?php include('AddDeptData.php') ?>
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
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
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
.topnav a:hover 
{
    background-color: #ddd;
    color: black;
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
    background: #ddd;
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
<h1><img src="https://i.imgur.com/B8OB1oQ.png"></h1>
</div>
<div class="topnav"><a href="/Admin_Home.html">Home </a> <a href="/Admin_Registration.html">Registration</a>

<div class="dropdown"><button class="dropbtn">Academics</button>

<div class="dropdown-content"><a href="/DepartmentList.html">List of Departments</a> <a href="/AcademicInformation.html">Academic Information</a><a href="/ImportantDates.html">Important Dates/Deadlines</a><a href="/TranscriptFunctions.html">Transcript Functions</a></div>
</div>

<div class="dropdown"><button class="dropbtn">Admin Menu</button>

<div class="dropdown-content"><a href="/CourseFunctions.html">Course Functions</a> <a href="UserFunctions.html">User Functions</a><a href="/TimeslotFunctions.html">Timeslot Functions</a><a href="/LocationFunctions.html">Location Functions</a></div>
</div>
<a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>


      <form method = "post" action="AddDepartment.php">
       
         <p><label for = "txtList">Select Department:
            <input type = "text" name = "DeptName" 
               placeholder = "Select a Department" list = "Users" />
            <datalist id = "Users">
               <option value = "Biology">
               <option value = "Business">
               <option value = "Chemistry">
               <option value ="Computer Science">  
               <option value="Economics">
               <option value="English"> 
               <option value="History">
               <option value="Law">
               <option value="Modern Languages"> 
               <option value="Music and Dance">
               <option value="Physics">
               <option value="Psychology"> 
            
            </datalist>
         </label></p>
         <p> <button type="submit" class="btn" name="AddDept">Add Department</button>
            <input type = "reset" value = "Clear" /></p>   
      </form>
</div>

<div class="footer">
<h2>SUNY Gold</h2>
</div>
</body>
</html>