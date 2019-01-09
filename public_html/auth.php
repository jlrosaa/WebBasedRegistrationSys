<?php 
//including database connection     
require_once("config.php"); session_start(); 
 
//assigning default url for redirection
$strUrl = 'login.php?error=invalid';
 
if(isset($_POST["btnLogin"])) {
    $txtUsr = $_POST["txtUsr"];
    $txtPwd = ($_POST["txtPwd"]);    
 
    // checking the username and password is valid or not
    $strSql = "select user_id,username,access_control from users where username='".$txtUsr."' and password='".$txtPwd."'";
    $result = $mySqli->query($strSql);
     
    // if the auth is valid it will assign to session and redirect to my-account.php page
   // if($result->num_rows==1) {
   //     $row = $result->fetch_array(MYSQLI_BOTH);
     //   $_SESSION["userid"] = $row["UserId"];
    //    $_SESSION["username"] = $row["Email"];
    //    $_SESSION["access_control"] = $row["Type"];
     //   $strUrl = 'my-account.php';
 ///   }
     
 //   $result->free();
     
  /  // closing the connection
  //  $mySqli->close();
     
}
 
//redirecting the webpage based on the condiation
header("Location: $strUrl");