<?php include("header.php")?>


<?php include("sidenav.php")?>




<div style="position:fixed;
top:10px;
left:24%;
margin-left:40px;
margin-right:40px;
overflow:auto;
height:86%;
width:70%;">
<?php

include("db.php");
	
mysql_select_db($database, $link);

$result = mysql_query("SELECT * FROM events where event='main';");

while($row = mysql_fetch_array($result))
{

?>
<a class="ech" href="each.php?id=<?php echo $row['id'];?>">
<img src="evepics/<?php echo $row['id'];?>.jpg" height="200px" width="200px" alt="Event" style="margin:10px;">
<div class="echtit"><?php echo $row['title'];?></div>
<div class="echdesp"><?php echo $row['subtitle'];?></div>
</a>
<?php	
}
	mysql_close($link);  
?>
</div>


<?php include("footer.php")?>