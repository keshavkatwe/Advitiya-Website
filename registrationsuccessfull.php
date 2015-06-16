<?php include("header.php")?>
<?php include("sidenav.php")?>

<?php 
include("db.php");
$events='';

$name=$_POST['fullname'];
$coll=$_POST['college'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$acc=$_POST['acc'];
$money=$_POST['money'];


foreach($_POST['even'] as $value){
      $events=$events.$value;
}
mysql_select_db ($database, $link);
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {

  }
else if(preg_match("/^[a-zA-Z -]+$/", $name) === 0)
{
}
else if(preg_match("/^[0-9]{10}$/", $ph) === 0)
{
}
else if($branch=="Select")
{
}
else if($events=="")
{
}
else if($money==0)
{
}
else
  {
		$sql="INSERT INTO party (name, collage, branch, email, ph, events, acc, money) VALUES ('$name','$coll','$branch','$email','$ph','$events','$acc','$money')";

		if (!mysql_query($sql,$link))
		{
			$result = 'Not Saved';
			die('Error: ' . mysql_error());
		}
  }



$result = mysql_query("SELECT * FROM party where name='$name' and collage='$coll' and branch='$branch' and email='$email'");
$row = mysql_fetch_array($result);

$id=$row['id'];


mysql_close($link);  
?>

<script >


    $(document).ready(function(){
        $(document).keydown(function(event) {
            if (event.ctrlKey==true && (event.which == '80')) { //cntrl + p
                event.preventDefault();
				printDiv();
            }
        });
     });


</script>
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
border-radius:5px;">
<br/>
<div class="registers">Registration Successfull</div>
<hr style="position:absolute;width:90%;left:5%;
border:#603 solid 1px;
border-radius:5px;">

<p class="about">
Reference No: <?php echo $id;?><br/><br/>
Name: <?php echo $name;?><br/>
Collage: <?php echo $coll;?><br/>
Branch: <?php echo $branch;?><br/>
Email: <?php echo $email;?><br/>
Mobile No: <?php echo $ph;?><br/>
Accommodation: <?php echo $acc;?><br/><br/>
Amount to be paid is: Rs.<?php echo $money;?><br/>
<br/><br/>
<i>Please present the Reference-No to the registration counter.</i>
</p>

<div class="regdesps"><u>Events</u>
<ol>
<?php echo $events;?>
<ol>
</div>
<input onclick="javascript:printDiv();" type="button" value="Print" style="position:absolute;bottom:10px;right:10px;width:80px;height:40px;">
</div>
</div>

<div class="print" id="print">
<br>
<img src="images/registration.png" alt="Logo" height="80" style="margin-left:10px;">
<img src="images/sublo.png" alt="Logo" height="80" style="float:right;display:inline-block"><br><br>
<hr>
<p class="about">
Reference No: <?php echo $id;?><br/><br/>
Name: <?php echo $name;?><br/>
Collage: <?php echo $coll;?><br/>
Branch: <?php echo $branch;?><br/>
Email: <?php echo $email;?><br/>
Mobile No: <?php echo $ph;?><br/>
Accommodation: <?php echo $acc;?><br/><br/>
Amount to be paid is: Rs.<?php echo $money;?><br/>
<br/><br/>
<div class="regdesps" style="top:200px;"><u>Events</u>
<ol>
<?php echo $events;?>
<ol>
</div>
<i>Please present the acknowledment at the registration counter.</i>
</p>
<hr>
</div>

<script language="javascript" type="text/javascript">
        function printDiv() {
            //Get the HTML of div
            var divElements = document.getElementById("print").innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
          
        }
    </script>
<?php include("footer.php")?>