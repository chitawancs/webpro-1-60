<?php
session_start();
if (!isset($_SESSION['email'])) {
	echo "<meta http-equiv='refresh' content='0;url=index.phpl'>";
} ?>
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
	<div class="span6">Welcome!<strong>   <?php
        include("connect.php");
        $sql = "SELECT * FROM member WHERE email = '$_SESSION[email]' " ;
        $objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
    		$result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
  				 if($row['email']==$_SESSION["email"]){
  			        echo $row['mname'] ;
  				 }
         }
    ?></strong></div>
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
    <a class="brand" href="indexadmin.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>GAME PC </option>
			<option>Steamwallet </option>
			<option>Gaming Gear </option>
		</select>
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	  <a href="logout.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
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
		<li><a href="indexadmin.php">Home</a> <span class="divider">/</span></li>
    <li><a href="manage.php">Management</a> <span class="divider">/</span></li>
		 <li><a href="editproduct.php">Edit Product</a> <span class="divider">/</span></li>
		 <?php
				 $n ="". $_GET["n"] ;
				 $sql = "SELECT * FROM product WHERE pid = $n " ;
				 $objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
				 $result = $conn->query($sql);
				 while($row = $result->fetch_assoc()) {
						if($row['pid']==$n){
				 			echo "<li class="."active".">".$row['pname']."</li>" ;
						}
					}
		?>
    </ul>

    <form action="editpro.php" method="POST">
			<?php
					$n ="". $_GET["n"] ;
					$sql = "SELECT * FROM product WHERE pid = $n " ;
	        $objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
	    		$result = $conn->query($sql);
	        while($row = $result->fetch_assoc()) {
	  				 if($row['pid']==$n){
							 echo "<h3>". $row['pname']."</h3>" ;
						 }
					 }
				?>
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

		<h4>Edit Product</h4>
		<div class="control-group">
		</div>
		<div class="control-group">
		<label class="control-label" for="pname">Name <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="pname" value="<?php
					$n ="". $_GET["n"] ;
					$sql = "SELECT * FROM product WHERE pid = $n " ;
	        $objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
	    		$result = $conn->query($sql);
	        while($row = $result->fetch_assoc()) {
	  				 if($row['pid']==$n){
							  echo $row['pname'] ;
						 }
					 }
				?>">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="info">Info <sup>*</sup></label>
		<div class="controls">
			<input type="hidden" name = "n" value = <?php $n ="". $_GET["n"] ; echo $n ; ?> >
		  ​<textarea name="info" cols="70" rows="10" ><?php
					$n ="". $_GET["n"] ;
					$sql = "SELECT * FROM product WHERE pid = $n " ;
	        $objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
	    		$result = $conn->query($sql);
	        while($row = $result->fetch_assoc()) {
	  				 if($row['pid']==$n){
							  echo $row['info'] ;
						 }
					 }
				?></textarea>
		</div>
	  </div>
		<div class="control-group">
			<label class="control-label" for="price">Price <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="price" value="<?php
						$n ="". $_GET["n"] ;
						$sql = "SELECT * FROM product WHERE pid = $n " ;
		        $objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
		    		$result = $conn->query($sql);
		        while($row = $result->fetch_assoc()) {
		  				 if($row['pid']==$n){
								  echo $row['price'] ;
							 }
						 }
					?>">
			</div>
		 </div>
     <div class="control-group">
       <label class="control-label" for="price">Image <sup>*</sup></label>
       <div class="controls">
      <input type="file" name="pphoto" >
       </div>
      </div>
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" value="Save" />
			</div>
		</div>
</div>
</form>
  <form action="deletepro.php" method="POST">
<input type="hidden" name = "n" value = <?php $n ="". $_GET["n"] ; echo $n ; ?> >
<input class="btn btn-large btn-success" type="submit" value="Delete Product" />
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
