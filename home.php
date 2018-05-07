<?php 
$mysqli_db_hostname="localhost";
$mysqli_db_user="root";
$mysqli_db_password="";
$mysqli_db_database="test";
$con=mysqli_connect($mysqli_db_hostname,$mysqli_db_user,$mysqli_db_password)or die("could not connect database");
mysqli_select_db($con,$mysqli_db_database)or die("could not select database");

$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = $_POST["username"];
    $password = ($_POST["password"]);
	 if ($name == '' || $password == '') 
	 {
        		$msg = "You must enter all fields";
    	 } 
	else 
	{
        		$sql = "SELECT * FROM login WHERE username = '$name' AND password = '$password'";
        		$query = mysqli_query($con,$sql);
		if ($query === false)
		{
            			echo "Could not successfully run query from DB: " . mysqli_error();
            			exit;
        		}

        		if (mysqli_num_rows($query) > 0)
		 {
         			  header('Location:refer.php');
            			  exit;
        		  }
        		 $msg ="<script>document.getElementById('fade').style.display='block';</script>
						<script>document.getElementById('light').style.display='block';</script>
						<p style='color:red;text-align:center;'>You are wrong user</p>";;
    	 }
}
?>
<?php 
$msg1 = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = $_POST["username"];
    $password = ($_POST["password"]);
	 if ($name == '' || $password == '') 
	 {
        $msg1 = "You must enter all fields";
    } 
	else 
	{
        $sql = "SELECT * FROM userlogin WHERE username = '$name' AND password = '$password'";
        $query = mysqli_query($con,$sql);

        if ($query === false) {
            echo "Could not successfully run query from DB: " . mysqli_error();
            exit;
        }

        if (mysqli_num_rows($query) > 0) {
         
           header('Location:reference.php');
            
			exit;
        }

        $msg1 = "<script>document.getElementById('fade').style.display='block';</script>
						<script>document.getElementById('lite').style.display='block';</script>
						<p style='color:red;text-align:center;'>You are wrong user</p>";
    }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
ul
{
float:left;
width:100%;
padding:0;
margin:0;
list-style-type:none;
}
a
{
float:left;
width:20em;
text-decoration:underline;
color:blue;
padding:0.3em 1.2em;
}
.black_overlay
{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color:rgb(100, 150, 150);
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
} 
.white_content 
{
        display: none;
        position:absolute;
        top: 30%;
        left: 30%;
        width: 35%;
        height: 35%;
        padding: 16px;
        border: 8px;
		border-radius:100px;
        background-color:#999999;
        z-index:1002;
        overflow: auto;
}

a:hover {background-color:#FF3300;}
li {display:inline;}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
</head>
<link href="header.css" type="text/css" rel="stylesheet">
<body background="background2.png">
<br /><br /><br /><br /><br /><br /><br /><br /><br/>
<div id=a>
<div id=b>
<div class="ctext"><font face="AR CENA" color="violet">OWNER FRIENDLY TOLLWAYS</font> </div></div>
<div class="menu">
<div class="mlist">
<ul>
<li><a href="Home.php"><span><center>HOME</center></span></a></li>
<li><center>&nbsp;<a href= "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">ADMIN
</a></center></li>
<li><center><a href= "javascript:void(1)" onclick = "document.getElementById('lite').style.display='block';document.getElementById('fade').style.display='block'">USERLOGIN
</a></center></li>
</ul>
<div id="light" class="white_content">
<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
</a>
<form method="post" action="#">
<center>
    <p align="center">LOGIN</p>
	<p>
      <input type="text" name="username" id="username" placeholder="Username" required>
    </p>

    <p>
      <input type="password" name="password" id="password" placeholder="Password" required>
    </p>

    <p>
      <input type="submit" value="LOGIN" name="submit" />
      <input type="reset" value="CANCEL" name="submit" />
    </p>
	<p><?php echo $msg; ?></p>
 </center>
   <!-- <p class="forgot-password"><a href="fgetpass.html">Forgot your password?</a></p> -->
  </form></div></p>
 <div id="lite" class="white_content"> 
 <a href = "javascript:void(1)" onclick = "document.getElementById('lite').style.display='none';document.getElementById('fade').style.display='none'">
</a>
<form method="post" action="#">
<center>
    <p>USER LOGIN</p>
	<p>
      <input type="text" name="username" id="username" placeholder="Username" required>
    </p>

    <p>
      <input type="password" name="password" id="password" placeholder="Password" required>
    </p>

    <p>
      <input type="submit" value="LOGIN" name="Submit" />
      <input type="reset" value="CANCEL" name="Submit" />
    </p>
    <p><?php echo $msg1; ?></p>
	</center>
   <!-- <p class="forgot-password"><a href="fgetpass.html">Forgot your password?</a></p> -->
  </form></div></p>
<div id="fade" class="black_overlay"></div>
</ul>
</div>
</div>
<br />
<div class="btext">

<marquee behavior="scroll" direction="up">
<p class="sa">
TO KNOW THE DETAILS OF THE VEHICLE<br /><br />
OWNER FRIENDLY TOLLWAYS<br /><br />
TO REGISTER THE RECORDS OF THE VEHICLE<br /><br />
<br />
</p>
</marquee>
</div>
<br /><br/>
<p class="pa">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The system helps the passenger to know about the details of our vehicle</p>
</body>
</html>
