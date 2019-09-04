
<?php

include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (true) {
    
     
        $topic= mysqli_real_escape_string($db,$_POST['topic']);
       
        $description= mysqli_real_escape_string($db,$_POST['description']);
        
      
     
        $sql = "insert into blogtl(topic, description,  userid)values('$topic', '$description', '$login_session')";
        $result = mysqli_query($db,$sql);
		echo $sql;
      header("location:sblog.php");
    }
}
    
    
?>