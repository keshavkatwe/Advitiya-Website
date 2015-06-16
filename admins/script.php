


<?php 

include("../db.php");
	
mysql_select_db($database, $link);

$result = mysql_query("SELECT * FROM party");

echo '<table border="1" style="border:#000 1px solid">
<tr>
<td>RR No</td><td>Name</td><td>Collage</td><td>Branch</td><td>Ph No</td><td>Email</td>
<td>Events</td><td>Acc</td><td>Amount</td>
</tr>';
while($row = mysql_fetch_array($result))
{
	echo '<tr>
<td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['collage'].'</td><td>'.
$row['branch'].'</td><td>'.$row['ph'].'</td>
<td>'.$row['email'].'</td><td>'.$row['events'].'</td><td>'.$row['acc'].'</td><td>'.$row['money'].'</td>
</tr>';
}
echo '</table>';
?>

