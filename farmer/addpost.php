<?php include("fheader.php")?>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="ddp.php" method="post" enctype = "multipart/form-data">
<div class="panel-body form-horizontal payment-form">

<div class="form-group"><label for="concept"
	class="col-md-3 control-label-left">Crop Type<sup><i
	class="fa fa-star star-color"></i></sup></label>
<div class="col-md-9"><select type="text"
	class="form-control form-border" id="ctype" name="ctype" required>
	<option value="">Select</option>

	<?php foreach ($ctype as &$value) {?>

	<option value="<?php echo  $value;?>"><?php echo  $value;?></option>
	<?php }?>
</select></div>
</div>

<div class="form-group"><label for="concept"
	class="col-md-3 control-label-left">Scientist<sup><i
	class="fa fa-star star-color"></i></sup></label>
<div class="col-md-9"><select class="form-control form-border" id="scid"
	name="scid" required>
	<option value="">Select Scientist</option>

	 <?php


$sql = "SELECT userid, usertype, name, emailid, mobileno, password, address FROM usertl where usertype='Scientist' ";
$rs = mysqli_query($db, $sql);
$index = 0;
$count = mysqli_num_rows($rs);
if ($count > 0) {
    while ($row = $rs->fetch_assoc()) {
        $index ++;
        $name=$row["name"];
        $address=$row["address"];
       
        $userid=$row["userid"];
        
        ?>
        <option value="<?php echo $userid; ?>"><?php echo $name.",".$address;?></option>
        
        
         <?php 
    }
}
        ?>
</select></div>
</div>

<div class="form-group"><label for="concept"
	class="col-md-3 control-label-left">Problem<sup><i
	class="fa fa-star star-color"></i></sup></label>
<div class="col-md-9"><input type="text"
	class="form-control form-border" id="problem" name="problem" required></div>
</div>

<div class="form-group"><label for="concept"
	class="col-md-3 control-label-left">Problem Description<sup><i
	class="fa fa-star star-color"></i></sup></label>
<div class="col-md-9"><textarea class="form-control form-border"
	id="pdescr" name="pdescr" required></textarea></div>
</div>


<div class="form-group"><label for="concept"
	class="col-md-3 control-label-left">Image of Crop<sup><i
	class="fa fa-star star-color"></i></sup></label>
<div class="col-md-9"><input type="file"
	class="form-control form-border" id="image" name="image" required></div>
</div>

<div class="form-group"><label for="amount"
	class="col-md-3 control-label-left"></label>
<div class="col-md-9">
<button type="submit" class="btn btn-success btn-bold">Ask Query</button>

</div>
</div>

</div>
</form>
</div>
<div class="col-md-3"></div>
</div>

	<?php include("footer.php")?>
