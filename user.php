<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<link href="header.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="login.css">
<body background="background1.png">
<br />
<div style="background-color:#009999">
<center><font face="AR CENA" size="7">OWNER FRIENDLY TOLLWAYS</font></center>
</div>
<div class="menu">
<div class="mlist">
<ul>
<li><center><a href= "javascript:void(0)" onclick = "document.getElementById('temp').style.display='block';document.getElementById('fade').style.display='block'">RECHARGE
</a></center></li>
<br />
<br />
<br /><br />
<div id="temp" style="background-color:#0066FF; width:700px; height:500px" >
<br />
<form method="post" action="recharge.php">
<b>VehicleNo</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="VehicleNo" style="background-color:#FFFFFF" />
<br><br>
<b>BankAccountNo</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="BankAccountNo" style="background-color:#FFFFFF" />
<br><br>
<b>AccountNo</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="AccountNo" style="background-color:#FFFFFF" />
<br><br>
<b>Amount</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Amount" style="background-color:#FFFFFF" />
<br><br>
<b>DateTime</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="DateTime" value="<?php echo $uv; ?>" style="background-color:#FFFFFF" />
<br /><br /><br /><br /><br />
<center>
<input type="reset" value="RESET">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="SUBMIT">
</center>
</form>
</div>
<div id="fade" class="black_overlay"></div>
</ul>
</div>
</div>
</body>
</html>