<html>
<head><title>Balance</title>
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
</ul>
</div>
</div>
<div class="btext">
<center>
<h3><b><p align="center">BALANCE ENQUIRY</p></b></h3>
<br />
<form method="post" action="balance.php">
<b>AccountNo</b><input type="text" name="AccountNo" id="accountno" style="background-color:#FFFFFF" />
<br /><br />
<input type="reset" value="RESET" />
<input type="submit" value="SUBMIT" />
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

$result = mysqli_query($con,"select Balance FROM account where AccountNo= '" . $_POST['AccountNo'] . "'");
		    while($row = mysqli_fetch_array($result))
  				{
					 echo "<tr>";
					 echo "<td>Your Current balance is:".$row['Balance']."</td>";
					
        		}  
}
?>
</center>
</div>
</body>
</html>