<?php include("../header.php")?>

<link href="../style.css" rel="stylesheet" type="text/css">

<?php include("sidenav.php")?>



<div style="
	top:22%;
	top:-webkit-calc(55% - 200px);
	top:-moz-calc(55% - 200px);
left:30%;
position:fixed;
width:60%;
height:400px;
background:#000;
background: rgba(0, 0, 0, 0.7);
">
<div style="margin:20px;background:#FCFCFC;position:absolute;
height:360px;
width:95%;
width:-webkit-calc(100% - 40px);
width:-moz-calc(100% - 40px);
border-radius:5px;overflow:auto;">
<div class="registers">List of events</div>
<hr style="position:absolute;width:90%;left:5%;
border:#666 solid 1px;
border-radius:5px;
">
<br>
<?php

include("../db.php");
	
mysql_select_db($database, $link);

$result = mysql_query("SELECT * FROM events");

while($row = mysql_fetch_array($result))
{

?>
<a class="lest" href="editevent.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?> - <?php echo $row['event'];?></a>
<?php	
}
	mysql_close($link);  
?>

</div>
</div>



<?php include("../footer.php")?>