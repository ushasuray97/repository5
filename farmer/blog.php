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
<div class="divTableHead">Topic</div>

<div class="divTableHead">Description</div>

<div class="divTableHead">Posted on</div>
</div>
</div>
<div class="divTableBody"><?php


$sql = "SELECT blogid, topic, description, createdon, userid FROM blogtl order by  blogid desc ";
$rs = mysqli_query($db, $sql);
$index = 0;
$count = mysqli_num_rows($rs);
if ($count > 0) {
	while ($row = $rs->fetch_assoc()) {
		$index ++;
		$blogid=$row["blogid"];
		$topic=$row["topic"];
		$description=$row["description"];
			
		$createdon=$row["createdon"];

		?>



<div class="divTableRow">
<div class="divTableCell"><?php echo $index;?></div>
<div class="divTableCell"><?php echo  $topic;?></div>
<div class="divTableCell"><?php echo  $description;?></div>
<div class="divTableCell"><?php echo  $createdon;?></div>

</div>
		<?php }}?></div>

</div>
		<?php include("footer.php")?>