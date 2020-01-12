<?php
session_start();
if (!isset($_SESSION['email'])) {
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
} ?>
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
	<div class="span6">Welcome!<strong>  <?php
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
    <a class="brand" href="indexsuccess.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
    <form class="form-inline navbar-search" method="post" action="searchmember.php" >
    <input name="searching" type="text" placeholder="Search" />
      <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">

			<li class=""><a href="register.php">PROFILE</a></li>
 		 <li class=""><a href="contact.html">Contact</a></li>
 		 <li class="">
 		 <a href="logout.php" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>


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
	<?php
      include("connect.php");
      $gameid=$_GET["n"];
    //  echo "$gameid";
      $sql="select * from product where pid like '$gameid%'";
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
        if ($data=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
          ?>
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="indexsuccess.php">Home</a> <span class="divider">/</span></li>
    <li><a href="indexsuccess.php">Products</a> <span class="divider">/</span></li>
    <li class="active"><?php echo $data["pname"];?></li>
    </ul>
	<div class="row">
			<div id="gallery" class="span3">

				<img src="themes/images/products/<?php echo $data["pphoto"];?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>

			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">


                </div>
              <!--
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			  -->
              </div>

			 <div class="btn-toolbar">

			</div>
			</div>
			<div class="span6">
				 <h3><?php echo $data["pname"];?></h3>
				<small><?php echo $data["info"];?></small>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span><?php echo $data["price"];?> ฿ </span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>

				<hr class="soft"/>

				<form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label">
						</select>
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				<p>

				</p>




			</div>

					</li>
				  </ul>
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<?php }
      }

      mysqli_free_result($result);
      mysqli_close($conn);
    ?>
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
