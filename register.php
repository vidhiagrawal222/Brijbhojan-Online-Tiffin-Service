<!doctype html>

<html lang="en-US">

<head>

<meta charset="utf-8">

<title>BRIJ BHOJAN</title>

<link rel="shortcut icon" href="images/favicon.ico" /> 

<link href="css/reset.css" rel="stylesheet" type="text/css"> <!-- Reset Style Sheet -->

<link href="css/style.css" rel="stylesheet" type="text/css"> <!-- Main Style Sheet -->
<!--<script type="text/javascript">
function fun1()
{
	//alert("You are registered successfullt, thank you for registering");
	var a = document.getElementById("rname");
	var b = document.getElementById("rphone");
	var c = document.getElementById("ru");
	var d = document.getElementById("rmail");
	if(a.value!=null&&b.value!=null&&c.value!=null&&d.value!=null)
	{
		
		
		//alert("You are successfully registered, thank you for registering");
		fun2();
	}
	else
	{
		//alert("Please fill all the fields");
		return false;
	}
}
function fun2()
{
	alert("You are successfully registered, thank you registering");
}
</script>-->

</head>

<body>
<header>

<div class="home"><a href="index-2.html">Home</a></div>

<h3><a class="try" href="menu.html">Menu</a></h3><vr>
<h3><a class="try" href="about-us.html">About us</a></h3>
<h3><a class="try" href="how_it_works.html">How It Works</a></h3>
<h3><a class="try" href="delivery_mode.html">Delivery Mode</a></h3>
<h3><a class="try" href="contact-us.html">Contact</a></h3>

<div class="followus">

<ul>

<li>Follow us on</li>
<li><a href="https://www.facebook.com/starfoodonline" target="_blank"><img src="images/fb.png" alt="Facebook"></a></li>
</ul>

</div>

</header>

<div class="clear"></div>


<section class="loginSignupContainer">

	<div class="delivery_hd"><p>We deliver in Mathura only!</p></div>
    <article style="margin-right:0">

<div class="topHding">

<h1>Register</h1>

<p>Register now. Its free and always will be</p>

</div>

<script>

function password()

{

var pass=document.getElementById("pass");	

var vpass=document.getElementById("vpass");

if(pass.value!=vpass.value &&  pass.value!=null && vpass.value!=null)

{

alert("Password not matched");	

pass.focus();

return false;

}

else

{

return true;	

}

}

function fun1()
{
	//alert("You are registered successfullt, thank you for registering");
	var a = document.getElementById("rname");
	var b = document.getElementById("rphone");
	var c = document.getElementById("ru");
	var d = document.getElementById("rmail");
	if(a.value!=null&&b.value!=null&&c.value!=null&&d.value!=null)
	{
		
		
		alert("You are successfully registered, thank you for registering");
		//fun2();
	}
	else
	{
		alert("Please fill all the fields");
		//return false;
	}
}
//function fun2()
//{
//	alert("You are successfully registered, thank you registering");
//}
	
</script>

<form class="loginForm" method="post" action="#" onsubmit="return password();" >


<span><input type="text" class="logintxt" name="register_name" id="rname" placeholder="Name *" autocomplete="off" required></span>

<div class="clear"></div>

<span><input type="text" class="logintxt" name="register_phone" id="rphone" placeholder="Phone *" autocomplete="off" required></span>

<div class="clear"></div>

<span><input type="text" class="logintxt" name="register_usrname" id="ru" placeholder="Username *" required></span>

<div class="clear"></div>

<span><input type="email" class="logintxt" name="register_email" id="rmail" placeholder="Email *" autocomplete="off"  required></span>

<div class="clear"></div>

<span><input type="password" class="logintxt" name="register_pw"  id="pass" placeholder="Password *" autocomplete="off" required></span>

<div class="clear"></div>

<span><input type="password" class="logintxt" name="verifypw"   id="vpass" placeholder="Verify Password *"  autocomplete="off" required></span>

<div class="clear"></div>

<span><textarea class="logintxtarea" name="register_address" placeholder="Address*"></textarea></span>

<div class="clear"></div>


<div class="clear"></div><br>

<span>Fields marked with an asterisk (*) are required.</span>

<div class="clear"></div>

<span><input type="submit" name="registeration" class="nextstep" value="Sign Up"  ></span>
<ul class="needHelp">
<li><a href="signup.php">Want to login ? Click here</a></li>
</ul>
</form>
</article>
</section><!--loginSignupContainer-->
<div class="clear"></div>

<footer>
<p class="copyright-text"><a href="index-2.html">BRIJ BHOJAN</a>. All rights reserved. &nbsp; | &nbsp; Designed & Developed by Satyam Agrawal</p>
</footer>

<div id="slideshow">

<img src="images/banerimage/homesliders03.jpg" alt="homesliders03.jpg" class="active"/>

</div>

</body>

</html>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="brijbhojan";
if(isset($_POST['registeration']))
{
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed" .$conn->connect_error());
}
$rn = $_POST['register_name'];
$rp = $_POST['register_phone'];
$un = $_POST['register_usrname'];
$re = $_POST['register_email'];
$pw = $_POST['register_pw'];
$vp = $_POST['verifypw'];
$ra = $_POST['register_address'];

$sql = "INSERT INTO register (register_name, register_phone, register_usrname, register_email, register_pw, verifypw, register_address) VALUES ('$rn', '$rp', '$un', '$re', '$pw' , '$vp', '$ra')";
if($conn->query($sql) === TRUE)
{
	echo "New record created successfully";
	header('location:signup.php');
	
}
else
{
	echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
