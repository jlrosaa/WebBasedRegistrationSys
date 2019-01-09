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
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $id=$_POST['id'];
  
  
  
  
  
  
  
  $type =$_POST['type'];
  $fname = $_POST['fname'];
  $lname =  $_POST['lname'];
  $email =  $_POST['email'];
  $password=$_POST['password'];


$sql= "SELECT UserId FROM Users WHERE UserId='$id'";
    	
   $result = mysqli_query($db,$sql);
     
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count>0){
      
      echo "This User Id is already taken";
      
      
      }
      
      
   
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
  
 
   
  

  	$query = "INSERT INTO Users (UserId, Type, FirstName, LastName, Email, Password) 
  			  VALUES('$id','$type', '$fname', '$lname', '$email', '$password')";
  			  
  			  mysqli_query($db, $query);
  			  
  			  
  	
  	$login_creds="INSERT INTO Login(UserId, Email, Password, Type) VALUES('$id','$email','$password','$type')";
   
    
  			  mysqli_query($db, $login_creds);
  			    			  

      
      if($type==="Student"){
      $login_creds="INSERT INTO Students(UserId, Email) VALUES('$id','$email')";
   
    
  			  mysqli_query($db, $login_creds);
      
      
           	
 		$message = "Success";
echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		
	header("location: Admin_Home.php");        
      
      
      
      }
           
      if($type==="Faculty"){
      $login_creds="INSERT INTO Faculty(UserId, Email) VALUES('$id','$email')";
   
    
  			  mysqli_query($db, $login_creds);
      
           	
 		$message = "Success";
echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		
	header("location: Admin_Home.php");        
      
      }
       if($type==="Admin"){
      $login_creds="INSERT INTO Admins(UserId, Email) VALUES('$id','$email')";
   
    
  			  mysqli_query($db, $login_creds);
           	
 		$message = "Success";
echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		
	header("location: Admin_Home.php");        
      
      
      }
 
  if($type==="Researcher"){
      $login_creds="INSERT INTO Researcher(UserId, Email) VALUES('$id','$email')";
   
    
  			  mysqli_query($db, $login_creds);
      
           	
 		$message = "Success";
echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		
	header("location: Admin_Home.php");        
      
      }
 
  
    
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: index.php');
  }
