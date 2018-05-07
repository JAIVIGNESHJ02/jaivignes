<html>
<head><title>Vehicle Details</title>
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
<div class="btext" style="height:500px">
<center>
<h3><b><p align="center">VEHICLE DETAILS</p></b></h3>
<br />
<form method="post" action="view.php">
<b>VehicleNo</b><input type="text" name="VehicleNo" id="vehicleno" style="background-color:#FFFFFF" />
<br /><br />
<input type="submit" value="SUBMIT" />
<input type=button value=CANCEL>
<br />
</form>
<?php
if($_POST)
{
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"select * FROM register where VehicleNo= '" . $_POST['VehicleNo'] . "'");
 echo "<br><br><br>";
  echo "<table border=2>";
  echo "<tr>";
  echo "<td>VehicleNo</td>";
  echo "<td>OwnerName</td>";
  echo "<td>AccountNo</td>";
  echo "<td>MobileNo</td>";
  echo "<td>TollName</td>";
  echo "<td>Way</td>";
  echo "<td>VehicleType</td>";
  echo "<td>UserName</td>";
  echo "<td>DateTime</td></tr>";

   while($row = mysqli_fetch_array($result))
  {
  	echo "<br><br><br>";
  	echo "<tr>";
  	echo "<td>".$row['VehicleNo']."</td>";
  	echo "<td>".$row['OwnerName']."</td>";
  	echo "<td>".$row['AccountNo']."</td>";
  	echo "<td>".$row['MobileNo']."</td>";
  	echo "<td>".$row['TollName']."</td>";
  	echo "<td>".$row['Way']."</td>";
  	echo "<td>".$row['VehicleType']."</td>";
  	echo "<td>".$row['UserName']."</td>";
  	echo "<td>".$row['DateTime']."</td></tr>";
  }
  echo "</table>";
}
?>
</center>
</div>
</body>
</html>
