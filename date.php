<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
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
<li><a href="date.php" style="width:200px"><span><center>DATE</center></span></a></li>
</ul>
</div>
</div>
<div class="btext" style="height:500px">
<center>
<br />
<h3>DATE REPORT</h3>
<form method="post" action="date.php">
<b>AccountNo:</b><input type="text" id="t1" name="AccountNo" style="background-color:#FFFFFF">
<br><br>
<b>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" id="t2" name="Date" style="background-color:#FFFFFF">
<br><br/>
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

$accno = $_POST["AccountNo"];
$date=$_POST["Date"];
$result = mysqli_query($con,"select * FROM summarize where Date=\'$date\' AND AccountNo=\'$accno\'");
   echo "<br><br><br>";
  echo "<table border=2>";
  echo "<tr>";
  echo "<td>VehicleNo</td>";
  echo "<td>AccountNo</td>";
  echo "<td>Balance</td>";
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
</body>
</html>
