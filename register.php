<?php include("header.php")?>
<?php include("sidenav.php")?>

<?php $events='d';?>

<script>
var count = 0;

var c1=0,c2=0,c3=0,c4=0,c5=0,c6=0,c7=0,c8=0;
function cnt(take) {
	if(take==1)
	{
		if(c1==0)
		{
			count+=1;
			c1=1;
		}
		else
		{
			count-=1;
			c1=0;
		}
	}
	else if(take==2)
	{
		if(c2==0)
		{
			count+=1;
			c2=1;
		}
		else
		{
			count-=1;
			c2=0;
		}
	}
	else if(take==3)
	{
		if(c3==0)
		{
			count+=1;
			c3=1;
		}
		else
		{
			count-=1;
			c3=0;
		}
	}
	else if(take==4)
	{
		if(c4==0)
		{
			count+=1;
			c4=1;
		}
		else
		{
			count-=1;
			c4=0;
		}
	}
	else if(take==5)
	{
		if(c5==0)
		{
			count+=1;
			c5=1;
		}
		else
		{
			count-=1;
			c5=0;
		}
	}
	else if(take==6)
	{
		if(c6==0)
		{
			count+=1;
			c6=1;
		}
		else
		{
			count-=1;
			c6=0;
		}
	}
	else if(take==7)
	{
		if(c7==0)
		{
			count+=1;
			c7=1;
		}
		else
		{
			count-=1;
			c7=0;
		}
	}
	else if(take==8)
	{
		if(c8==0)
		{
			count+=1;
			c8=1;
		}
		else
		{
			count-=1;
			c8=0;
		}
	}
	if(count==0) {
		document.getElementById("amt").innerHTML="0";
		document.getElementById("money").value="0";	
	}
	else if(count>=1 && count<4) {
		document.getElementById("amt").innerHTML="300";
		document.getElementById("money").value="300";
	}
	if(count==4) {
		document.getElementById("amt").innerHTML="400";
		document.getElementById("money").value="400";
	}
	if(count==5) {
		document.getElementById("amt").innerHTML="500";
		document.getElementById("money").value="500";
	}
	if(count==6) {
		document.getElementById("amt").innerHTML="600";
		document.getElementById("money").value="600";
	}
	if(count==7) {
		document.getElementById("amt").innerHTML="700";
		document.getElementById("money").value="700";
	}
	if(count==8) {
		document.getElementById("amt").innerHTML="800";
		document.getElementById("money").value="800";
	}
}
	

function checkform()
{
	if(document.getElementById("fullname").value=="")
	{
		document.getElementById("error").innerHTML="Please enter name of the student";
		return false;
	}
	else if(document.getElementById("college").value=="")
	{
		document.getElementById("error").innerHTML="Please enter name of the college";
		return false;
	}
	else if(document.getElementById("branch").value=="Select")
	{
		document.getElementById("error").innerHTML="Please select branch";
		return false;
	}
	else if(document.getElementById("email").value=="")
	{
		document.getElementById("error").innerHTML="Please enter email address";
		return false;
	}
	else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))
	{
		document.getElementById("error").innerHTML="Please enter a valid email address";
		return false;
	}
	
	else if(document.getElementById("ph").value=="")
	{
		document.getElementById("error").innerHTML="Please enter mobile no";
		return false;
	}
	
	else if (!/^\d{10}$/.test(document.getElementById("ph").value))
	{
		document.getElementById("error").innerHTML="Please enter a valid mobile no";
		return false;
	}
	else if(document.getElementById("money").value==0)
	{
		document.getElementById("error").innerHTML="Select atleast one event";
		return false;
	}
	return true;
}


</script>


<form name="reg" onSubmit="return checkform()" method="post" action="registrationsuccessfull.php">
<div style="
top:9%;
	top:-webkit-calc(50% - 265px);
	top:-moz-calc(50% - 265px);

left:30%;
position:fixed;
width:800px;
height:530px;
background:#000;
background: rgba(0, 0, 0, 0.7);
">
<div style="margin:20px;background:#FCFCFC;position:absolute;
height:490px;
width:760px;
border-radius:5px;
overflow:auto">
<br/>
<div class="error" id="error"></div>
<div class="registers">Registration</div>
<hr style="position:absolute;width:90%;left:5%;
border:#666 solid 1px;
border-radius:5px;">
<br/>

<div style="position:absolute;left:5%">
<div class="title">Name of the student: </div>
<input id="fullname" name="fullname" class="reg" type="text" placeholder="Fullname">
<br/><br/>
<div class="title">Name of the college:</div>
<input id="college" name="college" class="reg" type="text" placeholder="Institution">
<br/><br/>
<div class="title">Branch:</div>
<select id="branch" name="branch" style="
	margin-top:5px;
	color:#000;
	width:300px;
	border:#666 solid 1px;
	font-size:16px;
	border-radius:5px;
	text-indent:5px;
">
<option>Select</option>
<option>Ise</option>
<option>Cse</option>
<option>Mech</option>
<option>Auto</option>
<option>Civil</option>
<option>Ec</option>
<option>EE</option>
<option>Other</option>
</select>
<br/><br/>
<div class="title">Email:</div>
<input id="email" name="email" class="reg" type="text" placeholder="example@email.com">
<br/><br/>
<div class="title">Mobile no:</div>
<input id="ph" name="ph" class="reg" type="text" placeholder=""><br/><br/>
<div class="title" style="display:inline-block">Accommodation:</div>
<select id="acc" name="acc" style="
	margin-top:5px;
	color:#000;
	width:100px;
	border:#666 solid 1px;
	font-size:16px;
	border-radius:5px;
	text-indent:5px;
">
<option>Yes</option>
<option selected>No</option>
</select>
<br/>
</div>

<div style="position:absolute;left:50%">
<div class="title">Events:</div>
<div style="width:340px;border:#666 solid 1px;margin-top:5px;
border-radius:5px;">
<ol class="list">
<li class="list"><label for="1">Project exhibition &amp; competition.<a href="each.php?id=1" target="new">more</a></label>
<input id="1" class="chk" type="checkbox" name="even[]" onClick="cnt(1);" value="<li>Project competition</li>"></li>
<li class="list"><label for="7">IT Treasure Hunt <a href="each.php?id=2" target="new">more</a></label>
<input name="even[]" id="7" class="chk" type="checkbox" onClick="cnt(8);" value="<li>Treasure Hunt</li>"></li>
<li class="list">Lan War
<ul>
<li><label for="4">Counter Strike. <a href="each.php?id=5" target="new">more</a></label>
<input name="even[]" id="4" class="chk" type="checkbox" onClick="cnt(4);" value="<li>Counter Strike</li>"></li>
<li><label for="5">NFS - Most Wanted. <a href="each.php?id=6" target="new">more</a></label>
<input name="even[]" id="5" class="chk" type="checkbox" onClick="cnt(5);" value="<li>Most Wanted</li>"></li>

<li><label for="9">Fifa. <a href="each.php?id=10" target="new">more</a></label>
<input name="even[]" id="9" class="chk" type="checkbox" onClick="cnt(6);" value="<li>Fifa</li>"></li>
</ul>

</li>
<li class="list"><label for="2">Paper Presentation. <a href="each.php?id=8" target="new">more</a></label>
<input id="2" class="chk" type="checkbox" name="even[]" onClick="cnt(2);" value="<li>Paper Presentation</li>"></li>
<li class="list"><label for="3">Brain Bash. <a href="each.php?id=7" target="new">more</a></label>
<input id="3" class="chk" type="checkbox" name="even[]" onClick="cnt(3);"  value="<li>Brain Bash</li>"></li>

<li class="list"><label for="6">Debate competition. <a href="each.php?id=9" target="new">more</a></label>
<input name="even[]" id="6" class="chk" type="checkbox"  onClick="cnt(7);"  value="<li>Debate competition</li>"></li>
</ol>
</div>

<div class="title">Amount to be paid: Rs. <div id="amt" style="display:inline-block">0</div></div>
<div class="title">Fees includes Registration Kit(Laptop Bag, Certificate), 2 days lunch and accommodation.</div><br/>
<input name="money" id="money" type="text" value="0" style="display:none">
</div>
<input type="submit" class="sub" value="Register">
</div>
</div>
</form>
<?php include("footer.php")?>