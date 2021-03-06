﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MeehKeystore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->

<!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> GUEST</strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 0 ] Itemes in your cart </span> </a>
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>

		<form class="form-inline navbar-search" method="post" action="search.php" >
		<input name="searching" type="text" placeholder="Search" />
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>

    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="register.php">Register</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			  <form action="log.php" method="POST">
			  <div class="control-group">
				<input type="text" name="inputEmail1" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" name="inputPassword1" placeholder="Password">
			  </div>
			  <div class="control-group">
				</label>
			  </div>
      <button type="submit" class="btn btn-success">Sign in</button>
          <a href="register.php"><button type="button" class="btn btn-success">Register</button></a>
  			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          </form>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>

    <form action="regis.php" method="POST">
	<h3> Registration</h3>
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->

		<h4>Registration</h4>
		<div class="control-group">
		</div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="input_email" placeholder="Email">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="inputPassword1" placeholder="Password">
		</div>
	  </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="inputFname1" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="inputLnam" placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="address">Aaddress <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="address" cols="26" rows="3" placeholder="Address">
			</div>
		</div>
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<div  id="footerSection">
<div class="container">
  <div class="row">
    <div class="span3">

     </div>
    <div class="span3">

     </div>
    <div class="span3">

     </div>
    <div id="socialMedia" class="span3 pull-right">
      <h5>SOCIAL MEDIA </h5>
      <a href="https://www.facebook.com/nott.chitawan"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
      <a href="https://instagram.com/chitawan.nott"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
      <a href="https://www.youtube.com/MAYBEmeeh"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
     </div>
   </div>
  <p class="pull-right">&copy; MeehKeyStore</p>
</div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
  <script src="themes/js/jquery.lightbox-0.5.js"></script>

<!-- Themes switcher section ============================================================================================= -->

<span id="themesBtn"></span>
</body>
</html>
