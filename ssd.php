<?php
if($_POST)
{
$con=mysqli_connect("localhost","root","","test");
$accno = $_POST["AccountNo"];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"select * FROM summarize where AccountNo='$accno'");
while($row = mysqli_fetch_array($result))
{
$vno=$row.VehicleNo;
echo $vno;					
}     		 
echo "</table>";
}
?>
<html>
<body>
<form action="ssd.php">
<input type="submit" value="submit"/>
<a href="http://india.timessms.com/http-api/receiverall.asp?username=127120&password=31053602&sender=Demo&cdmasender=&to=917708660420&message=The vehicle number 3639 has crossed the toll vijayamangalam at 2014-03-23">sms</a>
</form>
</body>
</html>