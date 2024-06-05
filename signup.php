
<!doctype html>

<html lang="en-US">

<head>

<meta charset="utf-8">

<title>BRIJ BHOJAN</title>

<link rel="shortcut icon" href="images/favicon.ico" /> <!-- Fav icon on browser title bar 32x32 -->

<link href="css/reset.css" rel="stylesheet" type="text/css"> <!-- Reset Style Sheet -->

<link href="css/style.css" rel="stylesheet" type="text/css"> <!-- Main Style Sheet -->
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

<li><a href="https://www.facebook.com/Brij-Bhojan-1643223142632862" target="_blank"><img src="images/fb.png" alt="Facebook"></a></li>
</ul>

</div>

</header>

<div class="clear"></div>
<div class="logo"><h1><a href="index-2.html">Logo</a></h1></div>

<section class="loginSignupContainer">

	<div class="delivery_hd"><p>We deliver in Mathura only!</p></div>

<article>

<div class="topHding">

<h1>Login</h1>

<p>Log in to this site.</p>

</div>

<form class="loginForm" action="#" method="post" >

<span><input type="email" class="logintxt" name="login_usrname" placeholder="Email *" required></span>

<div class="clear"></div>

<span><input type="password" class="logintxt" name="login_pw" placeholder="Password *" required></span>

<div class="clear"></div>

<!--<span><label>Remamber Me</label><input type="checkbox" class="checkBx"></span>-->

<div class="clear"></div><br>

<span>Fields marked with an asterisk (*) are required.</span>

<div class="clear"></div>


<span><input type="submit" name="login" class="nextstep" value="Login" ></span>

<div class="clear"></div>

<ul class="needHelp">

<li><h1><a href="register.php">Not registered ? Register Now</a></h1></li>

</ul>

<div class="clear"></div>

<div class="spacer1"></div>

</form>

</article>

<!-- Login as Guest-->

<!--<article>

<div class="topHding">

<h1>Login as guest</h1>

<p>Register now. Its free and always will be</p>

</div>
<form class="loginForm" action="#" method="post" >

<span><input type="text" class="logintxt" name="guest_name" placeholder="Name *" required></span>

<div class="clear"></div>

<span><input type="text" class="logintxt" name="guest_phone" placeholder="Phone *" required></span>

<div class="clear"></div>

<span><input type="email" class="logintxt" name="guest_email" placeholder="Email *" required></span>

<div class="clear"></div>

<span><textarea class="logintxtarea" name="guest_address" placeholder="Address*"></textarea></span>

<div class="clear"></div>

<span>(*) Mandatory Fields</span>

<div class="clear"></div>

<span><input type="submit" class="nextstep" name="Guest_Login" value="Login"></span>

</form>

</article>

</section><!--loginSignupContainer-->

<div class="clear"></div>

<footer>
<p class="copyright-text">
<a href="index-2.html">BRIJ BHOJAN</a>. All rights reserved. &nbsp; | &nbsp; Designed & Developed by Apoorva Agrawal</p>
</footer>

<div id="slideshow">

<img src="images/banerimage/homesliders03.jpg" alt="homesliders03.jpg" class="active"/>

</div>

</body>

</html>

<?php
session_start();
if(isset($_POST['login']))
{
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('brijbhojan') or die(mysql_error());
	$name=$_POST['login_usrname'];
	$pwd =$_POST['login_pw'];
	if($name!=''&&$pwd!='')
	{
		if($name=='admin@mail.com' && $pwd=='admin@host')
		{
			header('location:admin.php');
		}
		elseif($name!='admin@mail.com' && $pwd!='admin@host')
		{
		$query=mysql_query("select * from register where register_email='".$name."' and register_pw='".$pwd."'") or die(mysql_error());
		$res=mysql_fetch_row($query);
		if($res)
		{
			$_SESSION['name']=$name;
			header('location:order_now.php');
		}
		else
		{
			echo 'Username or password is incorrect';
		}
		}
	}
	else
	{
		echo 'Enter both username and password';
	}
}
?>
