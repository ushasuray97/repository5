<?php
include("config.php");

$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    
    $myusername = mysqli_real_escape_string($db,$_POST['userId']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sql = "SELECT userid, name, usertype, emailid, mobileno, password FROM usertl WHERE emailid = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
    
 
    $count = mysqli_num_rows($result);
    
	      
    if($count == 1) {
    	 $userId=$row['userid'];
    	 $usertype=$row["usertype"];
       session_start();
       
        $_SESSION['login_user'] = $userId;
        if($usertype=="Farmer")
        {
        
            header("location:fhome.php");
        }
        else {
        	 header("location:shome.php");
        	
        }
            
        
        
    }else {
       header("location:index.php");
    }
}
?>