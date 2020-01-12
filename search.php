<!DOCTYPE html>
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
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="#"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="#"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="#"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>

		  </div>
		  </div>

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div>
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->

<!-- Sidebar end=============================================== -->
		<?php
      include("connect.php");
      $input=$_POST["searching"];
      $sql="select * from product where pname like '%$input%'";
      if(!$result=mysqli_query($conn,$sql)){
        die('Error: '.mysqli_error($conn));
      }
      if(mysqli_num_rows($result)==0){
        echo "There is no data";
      }else{
          ?>

         <h4>Products </h4>
         <ul class="thumbnails">
          <?php
        while ($data=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
          ?>

				<li class="span3">
				  <div class="thumbnail">

	<a  href="product_details.php?n=<?php echo $data["pid"];?>"><img src="themes/images/products/<?php echo $data["pphoto"];?>" alt=""/></a >

					<div class="caption">
					  <h5><?php echo $data["pname"];?></h5>
					  <h4 style="text-align:center"><a class="btn" href="product_details.php?n=<?php echo $data["pid"];?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">฿ <?php echo $data["price"];?></a></h4>
					</div>
				  </div>
				</li>



        <?php }
      }

      mysqli_free_result($result);
      mysqli_close($conn);
    ?>
    </ul>



		</div>
		</div>
	</div>
</div>

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
