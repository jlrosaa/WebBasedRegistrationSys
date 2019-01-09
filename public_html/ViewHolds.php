<?php
session_start();
    
    
    //selects user email
    $SelectEmail = $_SESSION['email'];
    $db = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    $sql2= "SELECT UserId FROM Users WHERE Email='$SelectEmail'";
        
    $result = mysqli_query($db,$sql2);
   
        
    $row =mysqli_fetch_array($result,MYSQLI_ASSOC);

    $UserId = $row['UserId'];

   

    $query ="SELECT HoldType FROM CurrentHolds WHERE UserId = '$UserId'";
        
    $search_result = filterTable($query);
    

     
    function filterTable($query)
    {
      	$connect = mysqli_connect('localhost', 'systemdesign2018', 'System2018!', 'SUNYGOLD');
    	$filter_Result = mysqli_query($connect, $query);
    	return $filter_Result;
    }
    
   

    
?>
