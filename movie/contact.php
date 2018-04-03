<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zZombie</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/component.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
    
</head>
<body>
<div class="wrap-body">
<!--////////////////////////////////////Header-->
<header>
	<div class="top-header">
		<div class="wrap-top zerogrid">
			<nav>
			  <a class="toggleMenu" href="#">Menu</a>
			  <ul class="menu">
				  <li><a href="index.html">Home</a></li>
				  <li>
					  <a href="#" class="parent">Categories</a>
					  <ul>
						  <li><a href="#">Menu 1001</a></li>
						  <li><a href="#">Menu 1002</a></li>
						  <li><a href="#" class="parent">Menu 1003</a>
						  	<ul>
								<li><a href="#">Menu 3001</a></li>
						  		<li><a href="#">Menu 3002</a></li>
							</ul>
						  </li>
					  </ul>
				  </li>
				  <li><a href="single.html">Blog</a></li>
				  <li><a href="single.html">About</a></li>
				  <li><a href="contact.html">Contact Us</a></li>
			  </ul>
			</nav>
		</div>
	</div>
	<div class="wrap-header">
		<div class="zerogrid">
			<div id="logo"><a href="index.html"><img src="./images/logo.png"/></a></div>
			<div class="header-social">
				<a href="#"><img src="images/facebook.png" title="facebook"/></a>
				<a href="#"><img src="images/twitter.png" title="twitter"/></a>
				<a href="#"><img src="images/google.png" title="google"/></a>
				<a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
				<a href="#"><img src="images/instagram.png" title="instagram"/></a>
			</div>
			<div class="header-search">
				<center><form method="get" action="/search" id="search">
				  <input name="q" type="text" size="40" placeholder="Type key to search" />
				</form></center>
			</div>
		</div>
	</div>
</header>

    

<!--------------Content--------------->
<section class="container page-single">
	<div class="wrap-container zerogrid">
		<div class="col-2-3">
			<div id="main-content" class="wrap-col">
				<article class="single">
					<div class="wrap-art">
						<div class="col-1-2">
							<div class="wrap-col">
								<h2 class="title"><a href="#">Contact Us</a></h2>	
								<div class="row contact">
									<p class="address">JL.Kemacetan timur no.23. block.Q3<br>
										Jakarta-Indonesia</p>
									   <p class="phone">+6221 888 888 90 <br>
										+6221 888 88891</p>
									<p class="mail">info@yourdomain.com</p>
								</div>
								
								<div class="google-maps"> 
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="400" height="300" frameborder="0" style="border:0"></iframe>
								</div>
							</div>
						</div>
						<div class="col-1-2">
							<div class="wrap-col">
								
								<!--Warning-->
								<center><?php echo $text;?></center>
								<!---->
								
								<div id="contact_form">
									<form name="form1" id="ff" method="post" action="contact.php">
										<label>
										<span>Enter your name:</span>
										<input type="text"  name="name" id="name" required>
										</label>
										<label>
										<span>Enter your email:</span>
										<input type="email"  name="email" id="email" required>
										</label>
										<label>
										<span>Your message here:</span>
										<textarea name="message" id="message"></textarea>
										</label>
										<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="col-1-3">
			<div id="sidebar" class="wrap-col">
				<div class="wrap-slidebar">
					<div class="widget wid-about">
						<div class="wid-header">
							<a href="#"><img src="images/49.jpg"></a>
							<h4>About Us</h4>
						</div>
						<div class="wid-content">
							<p>Hey there! I'm Elaine - a web designer + front-end developer from Ireland. 
							I work with bloggers and other passionate creatives to create a design that reflects them and helps them grow their audience!</p>
						</div>
					</div>
					<div class="widget">
						<div class="wid-header">
							<h4>Tags</h4>
						</div>
						<div class="wid-content">
							<a href="#">animals ,</a>
							<a href="#">cooking ,</a>
							<a href="#">countries ,</a>
							<a href="#">home ,</a>
							<a href="#">likes ,</a>
							<a href="#">photo ,</a>
							<a href="#">travel ,</a>
							<a href="#">video </a>
						</div>
					</div>
					<div class="widget wid-posts">
						<div class="wid-header">
							<h4>Latest Posts</h4>
						</div>
						<div class="wid-content">
							<div class="row post">
								<a href="#"><img src="images/thumb4.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">Lorem ipsum sit amet</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb5.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">Lorem ipsum dolor sit</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
							<div class="row post">
								<a href="#"><img src="images/thumb6.jpg"/></a>
								<div class="resent">
								  <h6><a href="#">Lorem sit amet</a></h6><br>
								  <p>March 1, 2015</p>
								</div>
							</div>
						</div>
					</div>
					<div class="widget wid-archives">
						<div class="wid-header">
							<h4>Archives</h4>
						</div>
						<div class="wid-content">
							<select>
							    <option value="empty" selected>Select Month</option>
								<option value="3">March 2015</option>
								<option value="2">Febuary 2015</option>
								<option value="1">January 2015</option>
							</select>
						</div>
					</div>
					<div class="widget wid-flick">
						<div class="wid-header">
							<h4>Flick</h4>
						</div>
						<div class="wid-content">
							<div class="row">
								<div class="col-1-2">
									<div class="wrap-col">	
										<a href="#"><img src="images/thumb1.jpg"></a>
									</div>
								</div>	
								<div class="col-1-2">
									<div class="wrap-col">	
										<a href="#"><img src="images/thumb5.jpg"></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-1-2">
									<div class="wrap-col">	
										<a href="#"><img src="images/thumb2.jpg"></a>
									</div>
								</div>	
								<div class="col-1-2">
									<div class="wrap-col">	
										<a href="#"><img src="images/thumb4.jpg"></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-1-2">
									<div class="wrap-col">	
										<a href="#"><img src="images/thumb3.jpg"></a>
									</div>
								</div>	
								<div class="col-1-2">
									<div class="wrap-col">	
										<a href="#"><img src="images/thumb6.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="copyright">
		<p>Copyright © 2015 - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
	</div>
</footer>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/navigation.js"></script>
<script type="text/javascript" src="js/new 1.js"></script>
</body></html>