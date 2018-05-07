<html>
<head>
</head>
<link href="header.css" type="text/css" rel="stylesheet">
<link href="login.css" type="text/css" rel="stylesheet">
<body background="background2.png">
<br />
<div style="background-color:#009999">
<center><font face="Algerian" size="7">OWNER FRIENDLY TOLLWAYS</font></center>
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
<div class="btext" style="height:500px">
<?php
$uv=date('d-m-y');
$t=time();
?>
<center>
<h2>PAYMENT</h2>
<form method="post" action="swipe.php">
<b>VehicleNo&nbsp;&nbsp;&nbsp;</b><input type="text" style="background-color:#FFFFFF" name="VehicleNo" />
<br /><br />
<b>AccountNo&nbsp;</b><input type="text" name="AccountNo" style="background-color:#FFFFFF" /> 
<br /><br />
<b>Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="amount" style="background-color:green;width:80px;">
<br /><br />
<b>TollName&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="TollName" style="background-color:#FFFFFF" />
<br /><br />
<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="Date" value="<?php echo $uv; ?>" style="background-color:#FFFFFF" />
<br /><br />
<b>Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="Time" value="<?php echo $t; ?>" style="background-color:#FFFFFF" />
<br />
<br /> 
<input type="submit" value="SUBMIT" />
<input type="reset" value="RESET" />
<input type="button" value="CANCEL">
<br /><br />
<a href="#" onclick="return popitup('tariff.php')" style="color:#002222; font-size:20px">Click here to know the tariff</a href><br />
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

$vno=$_POST['VehicleNo'];
$accno=$_POST['AccountNo'];
$date=$_POST['Date'];
$time=$_POST['Time'];
$bal=$_POST["amount"];
$tname=$_POST["TollName"];

$sqlhall = "SELECT Balance FROM `account` WHERE `AccountNo`=$accno";
$resulthall=mysqli_query($con,$sqlhall)or die();
$row=mysqli_fetch_object($resulthall);
$retrived=$row->Balance;

$sqlhal = "SELECT MobileNo FROM `account` WHERE `AccountNo`=$accno";
$resulthal=mysqli_query($con,$sqlhal)or die();
$row=mysqli_fetch_object($resulthal);
$mno=$row->MobileNo;

//echo "New : $retrived";
if($retrived>500)
{
$Balance=$retrived-$bal;
//echo "total:$balance";
//Update the account table
$sql1="UPDATE `account` SET `Balance`=$Balance WHERE `AccountNo`=$accno";
$result=mysqli_query($con,$sql1)or die();
echo "Updated successfully";
//Insert to summary table
$sql2= "INSERT INTO summarize VALUES('$_POST[VehicleNo]','$_POST[AccountNo]','$Balance','$_POST[TollName]','$_POST[Date]','$_POST[Time]')";
	$query2= mysqli_query($con,$sql2);
	$vno=$_POST['VehicleNo'];
$tn=$_POST['TollName'];
	if ($query2=== false) 
	{
		echo "Could not successfully run query from DB: " . mysqli_error();
            		exit;
    }
	else
	{
		echo "<a href=http://india.timessms.com/http-api/receiverall.asp?username=gopi1&password=17745095&sender=Demo&cdmasender=&to=$mno&message=$vno,hascrossed$tn,at$time$date,balance:$Balance,>SMS</a>";
	}
}
else
{
	echo "<a href=http://india.timessms.com/http-api/receiverall.asp?username=gopi1&password=17745095&sender=Demo&cdmasender=&to=$mno&message=insufficient.balance
>SMS</a>";
}
	//header('Location:success.php');
		//exit;
}
?>
</body>
</html> 
<script language="javascript" type="text/javascript">
function popitup(url){
newwindow=window.open(url,'name','height=400,width=500');
if(window.focus){newwindow.focus()}
return false;
}
</script>