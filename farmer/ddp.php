
<?php

include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (true) {
    	
     
        $scid= mysqli_real_escape_string($db,$_POST['scid']);
       
        $problem= mysqli_real_escape_string($db,$_POST['problem']);
        $pdescr= mysqli_real_escape_string($db,$_POST['pdescr']);
         $ctype= mysqli_real_escape_string($db,$_POST['ctype']);
       
        $file_name="";
    if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
     
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
        
      
     
        $sql = "insert into posttl(ctype,status,scid, problem, pdescr, image, fid)values('$ctype','Pending','$scid', '$problem', '$pdescr', '$file_name', '$login_session')";
        $result = mysqli_query($db,$sql);
		echo $sql;
      header("location:fposts.php");
    }
}
    
    
?>