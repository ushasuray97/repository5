<?php include("fheader.php")?>
<style>
.form-control {
	width: 60%;
}
.wform-control {
	width: 100%;
}

.ctextbox {
	background-color: #C1C1C1;
}

.btn-lableinfo {
	color: #fff;
	background-color: #5B9BD5;
	border-color: #5B9BD5;
}

.lbl-lableinfo {
	color: #fff;
	background-color: #5B9BD5;
	border-color: #5B9BD5;
}

.btn-titlelableinfo {
	color: #292424;
	background-color: #F0AD4E;
	border-color: #F0AD4E;
	padding: 6px 35px;
}

.table-bordered {
	border: 1px solid #28137B;
}

.table-bordered>tfoot>tr>td {
	border: 1px solid #ddd;
}

tr {
	display: table-row;
	vertical-align: inherit;
	border-color: inherit;
}

.table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th
	{
	background-color: #CFDEEA;
}

.table-striped>tbody>tr:nth-child(even)>td,.table-striped>tbody>tr:nth-child(even)>th
	{
	background-color: rgb(232, 241, 249);;
}

.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th
	{
	border: 2px solid #FFF;
}
</style>

<!-- row  -->
<div class="row">
        <div class="col-md-9">
   <div id="type-Model-tables" >
  
			<table
				class="col-md-9 table-bordered table-striped table-condensed cf">
				<thead class="cf">
					<tr>

						<th class="lbl-lableinfo" align="center">
							SNO
						</th>
						<th class="lbl-lableinfo" align="center">
							Crop Type
						</th>
						<th class="lbl-lableinfo" align="center">
							Problem Name
						</th>
						<th class="lbl-lableinfo">
							Description
						</th>
						<th class="lbl-lableinfo" align="center">
							Image
						</th>
						<th class="lbl-lableinfo">Status</th>
					<th class="lbl-lableinfo">Answer</th>
						
					</tr>
				</thead>
				<tbody id="tbtypeModel">
				
				 <?php


$sql = "SELECT postid, scid, problem, pdescr, image, fid, status, reqans, ctype FROM posttl where fid='$login_session' ";
$rs = mysqli_query($db, $sql);
$index = 0;
$count = mysqli_num_rows($rs);
if ($count > 0) {
    while ($row = $rs->fetch_assoc()) {
        $index ++;
        $postid=$row["postid"];
        $scid=$row["scid"];
        $problem=$row["problem"];
       
        $pdescr=$row["pdescr"];
         $image=$row["image"];
          $fid=$row["fid"];
          $status=$row["status"];
          $reqans=$row["reqans"];
          $ctype=$row["ctype"];
        
        ?>
        <tr>
        	<td>
        		<?php echo  $index;?>
        	</td>
        	<td><?php echo $ctype;?></td>
        	<td><?php echo $problem;?></td>
        	<td><?php echo $pdescr;?></td>
        	<td><img src="images/<?php echo $image;?>" width="100" height="100"/></td>
        	<td><?php echo $status;?></td>
        	<td><?php echo $reqans;?></td>
        	
        </tr>
        <?php 
    }
}
        ?>


				</tbody>
			</table>
			
		</div>
		</div>
	
</div>
<!-- end row  -->
<?php include("footer.php")?>
