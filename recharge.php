<html>
<head>
<title>Recharge</title>
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
<li><a href="account.php" style="width:300px"><span><center>RECHARGE</center></span></a></li>
<li><a href="balance.php" style="width:300px"><span><center>BALANCE ENQUIRY</center></span></a></li>
<li><a href="mainsummary.php" style="width:300px"><span><center>SUMMARY</center></span></a></li>
</center>
</ul>
</div>
</div>
<div class="btext" style="height:500px">
<h3><b><p align="center">ACCOUNT RECHARGE</p></b></h3>
<br>
<?php
$uv=date('y-m-d');
$t=date('H:i:s');
?>
<center>
<form method="post" action="recharge.php">
<b>VehicleNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="VehicleNo" style="background-color:#FFFFFF">
<br><br>
<b>BankAccountNo&nbsp;</b><input type="text" name="BankAccountNo" style="background-color:#FFFFFF">
<br><br>
<b>AccountNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="AccountNo" style="background-color:#FFFFFF">
<br><br>
<b>Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="Amount" style="background-color:#FFFFFF">
<br><br>
<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="Date" value="<?php echo $uv; ?>" style="background-color:#FFFFFF" />
<br><br>
<b>Timee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="Time" value="<?php echo $t; ?>" style="background-color:#FFFFFF" />
<br><br>
<input type="reset" value="RESET">
<input type="submit" value="SUBMIT">
</form>
</center>
</div>
<?php
if($_POST)
{
$mysqli_db_hostname="localhost";
$mysqli_db_user="root";
$mysqli_db_password="";
$mysqli_db_database="test";
$con=mysqli_connect($mysqli_db_hostname,$mysqli_db_user,$mysqli_db_password)or die("could not connect database");
mysqli_select_db($con,$mysqli_db_database)or die("could not select database");

$accno=$_POST['AccountNo'];
$bal=$_POST['Amount'];
$date=$_POST['Date'];
$time=$_POST['Time'];
$TollName='-';

$sqlhall = "SELECT Balance FROM `account` WHERE `AccountNo`=$accno";
$resulthall=mysqli_query($con,$sqlhall)or die();
$row=mysqli_fetch_object($resulthall);
$retrived=$row->Balance;
$Balance=$retrived+$bal;

//Update the account table
$sql1="UPDATE `account` SET `Balance`=$Balance WHERE `AccountNo`=$accno";
$result=mysqli_query($con,$sql1)or die();

//Insert to summary table
$sql2= "INSERT INTO summarize VALUES('$_POST[VehicleNo]','$_POST[AccountNo]','$Balance','$TollName','$_POST[Date]','$_POST[Time]')";
	$query2= mysqli_query($con,$sql2);
	if ($query2=== false) 
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

</center>
</body>
</html>