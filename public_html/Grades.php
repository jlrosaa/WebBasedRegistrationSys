<?php include('AssignGradesTest.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUNY Gold Assign Grades</title>
	

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
<div class="topnav"><a href="/Admin_Home.html">Home </a> <a href="/Admin_Registration.html">Registration</a>

<div class="dropdown"><button class="dropbtn">Academics</button>

<div class="dropdown-content"><a href="/DepartmentList.html">List of Departments</a> <a href="/AcademicInformation.html">Academic Information</a><a href="/ImportantDates.html">Important Dates/Deadlines</a><a href="/TranscriptFunctions.html">Transcript Functions</a></div>
</div>

<div class="dropdown"><button class="dropbtn">Admin Menu</button>

<div class="dropdown-content"><a href="/CourseFunctions.html">Course Functions</a> <a href="UserFunctions.html">User Functions</a><a href="/TimeslotFunctions.html">Timeslot Functions</a><a href="/LocationFunctions.html">Location Functions</a></div>
</div>
<a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>
<div class="footer">
<h2>Grades List</h2>

<div class="rightcolumn">
<div class="card">
<form action="Grades.php" method="post"> 
   <p>
          <table border="1" align="center">
                <tr>
                    <th>Course</th>
                    <th>StudentID</th>
                    <th>Grade</th>
                </tr>
    

      
 	<?php while($row = mysqli_fetch_array($grade_result)):?>
                <tr>
                    echo "<td>$row['Course']</td>";
 echo "<td>$row['StudentId']</td>";
 echo "<td>$row['Grade']</td>";
 echo "<td>";
            if ($row8['Grade'] >= 90) {
              $Grade = 'A';
           }
            elseif ($row8['Grade'] >= 80) {
            $Grade = 'B';
            }elseif ($row8['Grade'] >= 70) {
            $Grade = 'C';
            }elseif ($row8['Grade'] >= 60) {
            $Grade = 'D';
            }else
            {
            $Grade = 'F';
            }   

echo $Grade ."</td></tr>";
                </tr>
                <?php endwhile;?>
            </table>
          </p>
                
              if (isset($_POST['input_grade'])) {

  
$Course=$_POST['Course']; 
$Grade = $_POST['Grade'];
$UserId =$_POST['UserId'];
$query = "INSERT INTO Grades (Course, Grade, UserId) 
  			  VALUES('$Course', '$Grade', '$UserId')";
  			  
  			  mysqli_query($db, $query);
  			  }


  
</div>
</div>
</div>
</div>
</form>
</body>
</html>