
<?php

include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (true) {
      //  $image=$_FILES['"image"']['name'];
        $name= mysqli_real_escape_string($db,$_POST['name']);
       
        $usertype= mysqli_real_escape_string($db,$_POST['usertype']);
        $emailId= mysqli_real_escape_string($db,$_POST['emailid']);
        $mobileNo= mysqli_real_escape_string($db,$_POST['mobileno']);
        $password= mysqli_real_escape_string($db,$_POST['password']);
        $address=mysqli_real_escape_string($db,$_POST['address']);
        $sql = "insert into usertl(name, usertype, emailid, mobileno, password,address)values('$name', '$usertype', '$emailId', '$mobileNo', '$password','$address')";
        $result = mysqli_query($db,$sql);
		
      header("location:index.php");
    }
}
    
    
?>