
<?php

include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (true) {
    	
     
        $pid= mysqli_real_escape_string($db,$_POST['pid']);
       
        $reqans= mysqli_real_escape_string($db,$_POST['reqans']);
      
        $sql = "update posttl set reqans='$reqans',status='Completed' where postid='$pid'";
        $result = mysqli_query($db,$sql);
		echo $sql;
      header("location:sposts.php");
    }
}
    
    
?>