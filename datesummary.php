<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1" />
<TITLE>Untitled Document</TITLE>
</HEAD>
<link href="header.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="login.css">
<body background="background2.png">
<br />
<div style="background-color:#009999">
<center><font face="AR CENA" size="7">OWNER FRIENDLY TOLLWAYS</font></center>
</div>
<div class="menu">
<div class="mlist">
<ul>
<li><a href="summary.php" style="width:200px"><span><center>ACCOUNT</center></span></a></li>
<li><a href="datesummary.php" style="width:200px"><span><center>VEHICLE</center></span></a></li>
<li><a href="tollname.php" style="width:200px"><span><center>TOLLNAME</center></span></a></li>
</center>
</ul>
</div>
</div>
<div class="btext" style="height:500px">
<center>
<br />
<h3>VEHICLE REPORT</h3>
<form method="post" action="datesummary.php">
<b>VehicleNo:</b><input type="text" name="VehicleNo" style="background-color:#FFFFFF" />
<br /><br/>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</form>
<?php
if($_POST)
{
$mysqli_db_hostname="localhost";
$mysqli_db_user="root";
$mysqli_db_password="";
$mysqli_db_database="test";
$con=mysqli_connect($mysqli_db_hostname,$mysqli_db_user,$mysqli_db_password)or die("could not connect database");
mysqli_select_db($con,$mysqli_db_database)or die("could not select database");

$vno = $_POST["VehicleNo"];
//$result = mysqli_query($con,"Select * FROM summarize where AccountNo= '" . $_POST['AccountNo'] . "'");
$result = mysqli_query($con,"select * FROM summarize where VehicleNo='$vno'");
   echo "<br>";
  echo "<table border=2>";
  echo "<tr>";
  echo "<td>VehicleNo</td>&nbsp;&nbsp;";
  echo "<td>AccountNo</td>&nbsp;&nbsp;";
  echo "<td>Balance</td>&nbsp;&nbsp;&nbsp;";
  echo "<td>TollName</td>";
  echo "<td>Date</td>";
  echo "<td>Time</td></tr>";

		    while($row = mysqli_fetch_array($result))
  				{
					
  echo "<tr>";
  echo "<td>" . $row['VehicleNo'] . "</td>";
  echo "<td>" . $row['AccountNo'] . "</td>";
  echo "<td>" . $row['Balance'] .   "</td>";
  echo "<td>" . $row['TollName'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Time'] . "</td></tr>";
}     		 
echo "</table>";
}
?>
</center>
</div>
</BODY>
</HTML>
