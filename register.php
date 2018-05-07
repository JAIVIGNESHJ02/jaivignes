<html>
<head>
<title>register</title>
/*<script type="text/javascript">
var pattern= /^[978]{1}[0-9]{9}$/;
var re1=/^[A-Za-z]{3,20}$/;
var re2=/^[a-z]{2}[0-9]{2}[a-z]{1}[0-9]{4}$/;
var re=/^[A-Za-z0-9]{8,20}[^A-Za-z0-9]$/;
var re3=/^[0-9]{4,12}$/;
var re4= /^\d{1,2}\/\d{1,2}\/\d{4}$/;
function check(a)
{
if(pattern.test(a))
{
	alert("VALID ENTRY");
}
else
{
	alert("INVALID ENTRY..IT SHOULD BE OF 10 DIGITS");
}
}
function check1(b)
{
if(re1.test(b))
{
	alert("VALID ENTRY");
}
else
{
	alert("INVALD ENTRY..IT SHOULD BE OF 3-10 CHARACTERS");
}
}
function check5(g)
{
if(re.test(b))
{
	alert("VALID ENTRY");
}
else
{
	alert("INVALD ENTRY..IT SHOULD BE ATLEAST 8 CHARACTERS");
}
}

function check2(c)
{
if(re2.test(c))
{
	alert("VALID ENTRY");
}
else
{
	alert("INVALID ENTRY");
}
}
function check3(d)
{
if(re3.test(d))
{
	alert("VALID ENTRY");
}
else
{
	alert("INVALID ENTRY..IT SHOULD BE OF NUMBER");
}
}
function check4(d)
{
if(re4.test(d))
{
	alert("VALID ENTRY");
}
else
{
	alert("INVALID ENTRY..IT SHOULD BE OF NUMBER");
}
}
</script>*/
<style type="text/css">
b
{
font-size:20px;
}
</style>
</head>
<link href="header.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="login.css">
<body background="background2.png">
<br />

<center><font face="AR CENA" size="7">OWNER FRIENDLY TOLLWAYS</font></center>
</div>
<div class="menu">
<div class="mlist">
<ul>
<li><a href="register.php" style="width:300px"><span><center>REGISTER</center></span></a></li>
<li><a href="swipe.php" style="width:300px"><span><center>PAYMENT</center></span></a></li>
<li><a href="view.php" style="width:300px"><span><center>VIEW</center></span></a></li>
</center>
</ul>
</div>
</div>
<div class="btext" style="height:640px">
<center>
<h3><b><p align="center" style="font-size:30px">VEHICLE REGISTRATION</p></b></h3>
<form  name="form" method="post" action="register.php">
<b>VehicleNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="VehicleNo" id="vehicleno" onBlur="check2(this.form.vehicleno.value);" style="background-color:#FFFFFF">
<br><br>
<b>OwnerName&nbsp;&nbsp;</b><input type="text" name="ownername" id="ownername" onBlur="check1(this.form.ownername.value);" style="background-color:#FFFFFF">
<br><br>
<b>AccountNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="accountno" id="accountno" onBlur="check3(this.form.accountno.value);" style="background-color:#FFFFFF">
<br><br>
<b>MobileNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="mobileno" id="mobileno" onBlur="check(this.form.mobileno.value);" style="background-color:#FFFFFF">
<br><br>
<b>TollName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="tollname" id="datetime" onBlur="check1(this.form.tollname.value);" style="background-color:#FFFFFF">
<br><br>
<b>Way&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="way" id="way" onBlur="check1(this.form.way.value);" style="background-color:#FFFFFF">
<br><br>
<b>VehicleType&nbsp;&nbsp;&nbsp;</b><select name="vehicletype" style="background-color=#0033FF">
<option value=""></option>
<option value="car">Car</option>
<option value="bus">Bus</option>
<option value="truck">Truck</option>
<option value="container">Container</option>
</select>
<br><br>
<b>UserName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="username" id="username" style="background-color:#FFFFFF" />
<br />
<br />
<b>DateTime&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="datetime" id="datetime" style="background-color:#FFFFFF" />
<br><br>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET"><br /><br />
</form>
</center>
</div>
<?php
$mysqli_db_hostname="localhost";
$mysqli_db_user="root";
$mysqli_db_password="";
$mysqli_db_database="test";
$con=mysqli_connect($mysqli_db_hostname,$mysqli_db_user,$mysqli_db_password)or die("could not connect database");
mysqli_select_db($con,$mysqli_db_database)or die("could not select database");

if($_POST)
{
$sql = "INSERT INTO register VALUES('$_POST[VehicleNo]','$_POST[ownername]','$_POST[accountno]','$_POST[mobileno]','$_POST[tollname]','$_POST[way]','$_POST[vehicletype]','$_POST[username]','$_POST[datetime]')";
	$query = mysqli_query($con,$sql);
	if ($query === false) 
	{
		echo "Could not successfully run query from DB: " . mysqli_error();
            		exit;
        	}
	else
	{
		header('Location:success.php');
            		exit;
	}
}
?>
</body>
</html>