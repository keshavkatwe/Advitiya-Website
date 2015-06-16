<?php include("../header.php")?>

<link href="../style.css" rel="stylesheet" type="text/css">

<?php include("sidenav.php")?>

<?php

$id=$_GET['id'];
include("../db.php");


mysql_select_db($database, $link);

$result = mysql_query("SELECT * FROM events where id=$id");

$row = mysql_fetch_array($result);


	$title=$row['title'];
	$subtitle=$row['subtitle'];
	$rules=$row['rules'];
	$event=$row['event'];
	$sor=$row['sor'];
	$cor=$row['cor'];
$result = "";
if(isset($_POST['submit']))
{
	
	mysql_select_db ($database);
	
	$title=$_POST['title'];
	$subtitle=$_POST['subtitle'];
	$rules=$_POST['rules'];
	$event=$_POST['event'];
	$sor=$_POST['sor'];
	$cor=$_POST['cor'];
	
	$sql="update events set title='$title', subtitle='$subtitle', rules='$rules', event='$event', sor='$sor', cor='$cor' where id=$id";
			if (!mysql_query($sql,$link))
  			{
  				$result = 'Not Saved';
				die('Error: ' . mysql_error());
  			}
			else
			{
				$result = "Saved";
				$title="";
				$subtitle="";
				$rules="";
				$event="";
				$sor="";
				$cor="";
			}

	mysql_close($link);  
	
}
?>


<form action="" method="post" enctype="multipart/form-data">
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
border-radius:5px;
overflow:auto;">

<div style="
position:absolute;
left:20px;
top:20px;">
<div class="title">Title of the event:</div>
<input name="title" class="addevent" type="text" value="<?php echo $title;?>">
<br/><br/>
<div class="title">SubTitle of the event:</div>
<input name="subtitle" class="addevent" type="text" value="<?php echo $subtitle;?>">
<br/><br/>
<div class="title">Rules &amp; Regulations:</div>
<textarea name="rules" style="width:350px;height:120px;"><?php echo $rules;?></textarea>
</div>


<div style="
position:absolute;
left:390px;
top:20px;">
<div class="title">Event:</div>
<select name="event">
<option value="main"><?php echo $event;?></option>
<option value="main">Main Event</option>
<option value="fun">Fun Event</option>
</select>

<br/><br/>
<div class="title">Staff Coordinaters:</div>
<input name="sor" class="addevent" type="text" value="<?php echo $sor;?>">

<br/><br/>
<div class="title">Event Coordinaters:</div>
<input name="cor" class="addevent" type="text" value="<?php echo $cor;?>">
</div>

<input class="sub" type="submit" name="submit" value="Update">
<div style="position:absolute;
bottom:10px;
right:200px"><?php echo $result;?></div>
</div>
</div>
</form>


<?php include("../footer.php")?>