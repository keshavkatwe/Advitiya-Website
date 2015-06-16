<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Print</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<style>
body
{
	background:#FFF;
}
</style>
</head>

<body>
<?php

$id=$_GET['id'];
include("../db.php");
	
mysql_select_db($database, $link);

if($id=='all')
$result = mysql_query("SELECT * FROM events");
else if($id=='acc')
$result = mysql_query("SELECT * FROM events");
else
$result = mysql_query("SELECT * FROM events where id=$id");
$row = mysql_fetch_array($result);

$ename=$row['title'];
$sor=$row['sor'];
$cor=$row['cor'];
mysql_close($link);
?>

<img src="../images/registration.png" alt="Logo" height="60" style="margin-left:20px;margin-top:20px;">
<br/><br/>

<?php 
if($id=='all')
{

}
else if($id=='acc')
{

}
else
{	
echo'<div class="pst">
Event Name: '.$ename.'<br/><br/>
Staff Coordinator: <br/>'.$sor.'<br/><br/>
Student Coordinator: <br/> '.$cor.'<br/><br/>
</div>';
}
?>


<table border="1" style="border:#000 1px solid">

<tr>
<td>RR No</td><td>Name</td><td>Collage</td><td>Branch</td><td>Ph No</td><td>Email</td>
<?php if($id=='all') echo'<td>Events</td>' ?><td>Acc</td><td>Amount</td>
</tr>
<?php 

include("../db.php");
	
mysql_select_db($database, $link);

if($id=='all')
$result = mysql_query("SELECT * FROM party");
else if($id=='acc')
$result = mysql_query("SELECT * FROM party where acc='Yes'");
else if($id=='1')
$result = mysql_query("SELECT * FROM party where events like '%Project competition%'");
else if($id=='2')
$result = mysql_query("SELECT * FROM party where events like '%Treasure Hunt%'");
else if($id=='5')
$result = mysql_query("SELECT * FROM party where events like '%Counter Strike%'");
else if($id=='6')
$result = mysql_query("SELECT * FROM party where events like '%Most Wanted%'");
else if($id=='7')
$result = mysql_query("SELECT * FROM party where events like '%Paper Presentation%'");
else if($id=='8')
$result = mysql_query("SELECT * FROM party where events like '%Debate competition%'");
else if($id=='9')
$result = mysql_query("SELECT * FROM party where events like '%Brain Bash%'");
else if($id=='10')
$result = mysql_query("SELECT * FROM party where events like '%Fifa%'");
while($row = mysql_fetch_array($result))
{
	if($id=='all')
	{
		echo '<tr>
<td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['collage'].'</td><td>'.
$row['branch'].'</td><td>'.$row['ph'].'</td>
<td>'.$row['email'].'</td><td>'.$row['events'].'</td><td>'.$row['acc'].'</td><td>'.$row['money'].'</td>
</tr>';
	}
	else
	{
		echo '<tr>
<td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['collage'].'</td><td>'.
$row['branch'].'</td><td>'.$row['ph'].'</td>
<td>'.$row['email'].'</td><td>'.$row['acc'].'</td><td>'.$row['money'].'</td>
</tr>';
	}
	
}

?>

</table>
<br>
<div class="pst">No of Participants: <?php echo mysql_num_rows($result);?></div>
</body>
</html>