<?php
session_start();



$db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');



      if (isset($_POST['SendEmail'])) {
  // receive all input values from the form
 
  
  
 
  $email =$_POST['email'];
}



    

    

  	
  $sql = "SELECT Password FROM Login WHERE Email = '$email'";
 
 
 $result= mysqli_query($db,$sql);
 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $password=$row['Password'];
  
  $msg="www.sunygold.net/ChangePassword.php";
  
  $headers = "From: Admin@sunygold.net" . "\r\n" .
"CC: somebodyelse@example.com";
mail($email,"Your Password",$msg,$headers);


 header("location:Login2.php"); 


   
   ?>
   