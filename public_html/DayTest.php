<?php include('Period.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUNY Gold Create Course</title>
	<style type="text/css">* 
<script>
function validateform()                                    
{ 
   
    var BuildingName = document.forms["AddPeriod"]["Days[]"];                 
    var RoomNumber = document.forms["AddPeriod"]["Start"];  
    var Capacity = document.forms["AddPeriod"]["End"];
 

    if (Days[].value == "")                               
    { 
        window.alert("Please select a day");  
        return false; 
    } 
    if (Start.value == "")                               
    { 
        window.alert("Please enter a building number"); 
       	Start.focus(); 
        return false; 
    } 
        if (End.value == "")                               
    { 
        window.alert("Please enter a room capacity"); 
        End.focus(); 
        return false; 
    } 
   
    
    return true; 

}
</script>
	
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

<div class="topnav"><a href="/Admin_Home.html">Home </a> <a href="/Admin_Registration.html">Registration</a> <a href="/Admin_Academics.html">Academics</a> <a href="/Admin_Menu.html">Admin Menu</a> <a href="/Logout.php" onclick="return confirm('Are you sure you want to logout?')" style="float:right">Logout</a></div>

<div class="footer">
<h2>Create a Time Slot</h2>

<div class="rightcolumn">
<div class="card">





<form name="AddPeriod" form action="AddPeriod.php" method="post" onSubmit="return validateform()">

<p>
<input type="checkbox" name="Days[]" value="Sun">Sunday<br>
<input type="checkbox" name="Days[]" value="M">Monday<br>
<input type="checkbox" name="Days[]" value="T">Tuesday <br>
<input type="checkbox" name="Days[]" value="W">Wednesday<br>
<input type="checkbox" name="Days[]" value="R">Thursday <br>
<input type="checkbox" name="Days[]" value="F">Friday<br>
<input type="checkbox" name="Days[]" value="S">Saturday <br>

</P>

<tr>
<td>Start time: </td>
<td>
<select name="Start">
<option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT * FROM Period");

while ($row = $sql->fetch_assoc())
{


echo "<option value='".$row["Period"]."'>" .$row['Period']."</option>";
}
?>

</select>
</td>
</tr>

<tr>
<td>End time: </td>
<td>
<select name="End">
<option disabled selected value> -- select an option -- </option>
<?php 

$sql = mysqli_query($db, "SELECT * FROM Period");

while ($row = $sql->fetch_assoc())
{


echo "<option value='".$row["Period"]."'>" .$row['Period']."</option>";
}
?>

</select>
</td>
</tr>


<p><button class="btn" name="AddTimeSlot" type="submit">Add Course</button><input type="reset" value="Clear" /></p>


</form>
 
</div>
</div>
</div>
</div>
</form>
</body>
</html>