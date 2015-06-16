<?php include("header.php")?>
<?php include("sidenav.php")?>

<?php
$id=$_GET['id'];
include("db.php");
	
mysql_select_db($database, $link);

$result = mysql_query("SELECT * FROM events where id=$id");

$row = mysql_fetch_array($result);

$title=$row['title'];
$subtitle=$row['subtitle'];
$rules=$row['rules'];
$event=$row['event'];
$sor=$row['sor'];
$cor=$row['cor'];

	
	mysql_close($link);  
	

?>


<div style="
top:9%;
	top:-webkit-calc(46% - 275px);
	top:-moz-calc(46% - 275px);
left:30%;
position:fixed;
width:800px;
height:550px;
background: rgba(0, 0, 0, 0.7);
">
<div style="margin:20px;background:#FCFCFC;position:absolute;
height:510px;
width:760px;
border-radius:5px;
overflow:auto">
<br/>



<!-- Main-->


<div class="protitle"><?php echo $title; ?></div>
<hr style="position:absolute;width:93%;left:3%;
border:#666 solid 1px;
border-radius:5px;">

<div class="prodesp">
<?php echo $subtitle; ?>
<br/><br/>
<u>Rules and regulations</u>
<?php echo $rules; ?>
<?php if($row['event']=='main')
echo'<u>Prizes</u>
<ul>
<li>1st Place</li>
<li>2nd Place</li>
<li>3rd Place</li>
</ul>';
?>

</div>

<img src="evepics/<?php echo $row['id'];?>.jpg" style="
position:absolute;
right:3%;
top:100px;
border:#666 solid 5px;"
height="200"
width="300">


<div class="titlecoordi" style="bottom:163px;">Staff Coordinator:</div>
<div class="coordi" style="bottom:120px;"><?php echo $sor; ?></div>

<div class="titlecoordi">Student Coordinator:</div>
<div class="coordi"><?php 
echo $cor;
?></div>
<!-- Main-->

</div>
</div>
<?php include("footer.php")?>