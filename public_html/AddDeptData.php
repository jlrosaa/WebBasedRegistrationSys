<?php
session_start();

// initializing variables
/*$username = "";
$email    = "";
$errors = array(); 
*/
// connect to the database
$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');


// REGISTER USER
if (isset($_POST['AddDept'])) {
  // receive all input values from the form
  $dept =$_POST['DeptName'];
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 /* if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }*/

 /* // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  */
      

  	$query = "INSERT INTO Department(DeptName) 
  			  VALUES('$dept')";
  			  
  			  mysqli_query($db, $query);
  			  

  	
 
  	



    
    
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: index.php');
  }
