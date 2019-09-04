<?php include("header.php")?>
<?php include("config.php")?>

<style>
<!--
div.blueTable {
	border: 1px solid #1C6EA4;
	background-color: #EEEEEE;
	width: 100%;
	text-align: left;
	border-collapse: collapse;
}

.divTable.blueTable .divTableCell,.divTable.blueTable .divTableHead {
	border: 1px solid #AAAAAA;
	padding: 3px 2px;
}

.divTable.blueTable .divTableBody .divTableCell {
	font-size: 13px;
}

.divTable.blueTable .divTableRow:nth-child(even) {
	background: #D0E4F5;
}

.divTable.blueTable .divTableHeading {
	background: #1C6EA4;
	background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
	background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
	background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
	border-bottom: 2px solid #444444;
}

.divTable.blueTable .divTableHeading .divTableHead {
	font-size: 15px;
	font-weight: bold;
	color: #FFFFFF;
	border-left: 2px solid #D0E4F5;
}

.divTable.blueTable .divTableHeading .divTableHead:first-child {
	border-left: none;
}

.blueTable .tableFootStyle {
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
	background: #D0E4F5;
	background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
	background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
	background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
	border-top: 2px solid #444444;
}

.blueTable .tableFootStyle {
	font-size: 14px;
}

.blueTable .tableFootStyle .links {
	text-align: right;
}

.blueTable .tableFootStyle .links a {
	display: inline-block;
	background: #1C6EA4;
	color: #FFFFFF;
	padding: 2px 8px;
	border-radius: 5px;
}

.blueTable.outerTableFooter {
	border-top: none;
}

.blueTable.outerTableFooter .tableFootStyle {
	padding: 3px 5px;
}

/* DivTable.com */
.divTable {
	display: table;
}

.divTableRow {
	display: table-row;
}

.divTableHeading {
	display: table-header-group;
}

.divTableCell,.divTableHead {
	display: table-cell;
}

.divTableHeading {
	display: table-header-group;
}

.divTableFoot {
	display: table-footer-group;
}

.divTableBody {
	display: table-row-group;
}
-->
</style>
<div class="divTable blueTable">
<div class="divTableHeading">
<div class="divTableRow">
<div class="divTableHead">SNO</div>
<div class="divTableHead">Crop Type</div>
<div class="divTableHead">Problem</div>
<div class="divTableHead">Description</div>

<div class="divTableHead"></div>
</div>
</div>
<div class="divTableBody"><?php


$sql = "SELECT sugid, ctype, problem, pdescr, scid, image FROM sugtl order by  sugid desc ";
$rs = mysqli_query($db, $sql);
$index = 0;
$count = mysqli_num_rows($rs);
if ($count > 0) {
	while ($row = $rs->fetch_assoc()) {
		$index ++;
		$sugid=$row["sugid"];
		$ctype=$row["ctype"];
		$problem=$row["problem"];
			
		$pdescr=$row["pdescr"];
		$scid=$row["scid"];
		$image=$row["image"];

		?>



<div class="divTableRow">
<div class="divTableCell"><?php echo $index;?></div>
<div class="divTableCell"><?php echo  $ctype;?></div>
<div class="divTableCell"><?php echo  $problem;?></div>
<div class="divTableCell"><?php echo  $pdescr;?></div>
<div class="divTableCell"><img src="images/<?php echo $image;?>" height="100" width="100"></div>
</div>
		<?php }}?></div>

</div>
		<?php include("footer.php")?>
