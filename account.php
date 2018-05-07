
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Choose Vehicle</title>
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
<li><a href="account.php" style="width:300px"><span><center>RECHARGE</center></span></a></li>
<li><a href="balance.php" style="width:300px"><span><center>BALANCE ENQUIRY</center></span></a></li>
<li><a href="mainsummary.php" style="width:300px"><span><center>SUMMARY</center></span></a></li>
</center>
</ul>
</div>
</div>
<div class="btext">
<center>
<h3><b><p align="center">VEHICLE</p></b></h3>
<form method="post" action="account.php">
<b>Username&nbsp;&nbsp;</b><input type="text" name="Username" id="Username">
<br><br>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET"><br />
<h4>Vehicle Numbers Are</h4>
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
  $result = mysqli_query($con,"select VehicleNo FROM register where Username= '" . $_POST['Username'] . "'");
		    while($row = mysqli_fetch_array($result))
  				{
					echo "<tr>";
					echo "<td>".$row['VehicleNo']."</td><br>";
				
				} 	 
}
?>
<a href="recharge.php" style="color:#006600; font-size:18px">Click here to recharge now</a>
<br />
</center>
</div>
</body>
</html>
