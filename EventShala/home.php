<?php
session_start();
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->clgrg;
//$_SESSION['type']="college";
$col=$collection->count();
if($_SESSION['type']==NULL){
	echo "deine ni h";?>
	<html>

<head>
	<meta name="viewport" content="width-device-width , initial-scale=1.0">;
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

<!--	
<style>

.navbar-default {
    background-color: #FF8C00;
}
</style>-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-static-top no-top  " role="navigation">

	<div class="container" >
		<a class="navbar-brand" href="#"><img src="logo.png"></a>
	<br/>
			<div class="navbar-header navbar-right">
				<ul class="nav navbar-nav">
					<li class="active"><a href="home.php">Home</a></li>
					<li><a href="about1.php">About Us</a></li>
					<li><a href="contact1.php">Contact US</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="link.php">Register</a></li>
					
				</ul>
			</div>
		
	</div>	
</nav>
<br/><br/><br/><br/><br/>
<div class="page-header no-margin no-padding" >
	<div class="container" style="width:100%;">
	<img src="cover.jpg" class="img-responsive" width="100%">
	</div>
</div>

<br/>
<div class="container" style="width:100%;background:#F58220;">
	<div class="page-header">
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
				<img src="college.jpg" class="pull-left">
				<h2><?php echo $col;?> Colleges </h2>
			</div>
<?php
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->event;
$event=$collection->count();

?>

			<div class="col-md-3 col-md-offset-1 ">
				<img src="city.jpg" class="pull-left">
				<h2><?php echo $event;?> Events </h2>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<img src="sponsor.jpg" class="pull-left">
				<h2>Sponsor Now </h2>
			</div>
		</div>
	</div>
</div>

<!--footer starts-->

<footer class="site-footer">
<div class="container">
<div class="col-md-5">  @ 2015 Copyrights Mycollegefest | All rights Reserved.</div>
<div class="col-md-7"></div>
<ul class="footer-nav">
<li><a href="home.php">Home</a><li>
<li><a href="about1.php">About Us</a><li>
<li><a href="contact1.php">Contact Us</a><li>

</ul>
</div>
</div>
</footer>

<!--footer ends-->




<script src="js/jquery_min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>

</html>
<?php }
elseif ($_SESSION['type']=="college") {
	echo "";?>
	<html>

<head>
	<meta name="viewport" content="width-device-width , initial-scale=1.0">;
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

<!--	
<style>

.navbar-default {
    background-color: #FF8C00;
}
</style>-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-static-top no-top  " role="navigation">

	<div class="container" >
		<a class="navbar-brand" href="#"><img src="logo.png"></a>
	<br/>
			<div class="navbar-header navbar-right">
				<ul class="nav navbar-nav">
					<li ><a href="home.php"><h4>Home</h4></a></li>
					<li><a href="colprof.php"><h4>Profile</h4></a></li>
					<li><a href="aboutus.php"><h4>About</h4></a></li>
                    <li><a href="contact.php"><h4>contact</h4></a></li>
        			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><h4><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['type'];?></h4> <span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
        				</li>
   					</ul>
				</ul>
			</div>
		
	</div>	
</nav>
<br/><br/><br/><br/><br/>
<div class="page-header no-margin no-padding" >
	<div class="container" style="width:100%;">
	<img src="cover.jpg" class="img-responsive" width="100%">
	</div>
</div>
http://www.burinazarsurakha.com/click
<br/>
<div class="container" style="width:100%;background:#F58220;">
	<div class="page-header">
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
				<img src="college.jpg" class="pull-left">
				<h2><?php echo $col;?> Colleges </h2>
			</div>
<!--amber-->
<?php }
elseif ($_SESSION['type']=="student") {
	echo "";?>
	<html>

<head>
	<meta name="viewport" content="width-device-width , initial-scale=1.0">;
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

<!--	
<style>

.navbar-default {
    background-color: #FF8C00;
}
</style>-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-static-top no-top  " role="navigation">

	<div class="container" >
		<a class="navbar-brand" href="#"><img src="logo.png"></a>
	<br/>
			<div class="navbar-header navbar-right">
				<ul class="nav navbar-nav">
					<li ><a href="home.php"><h4>Home</h4></a></li>
					<li><a href="studentprof.php"><h4>Profile</h4></a></li>
					<li><a href="aboutus.php"><h4>About</h4></a></li>
                    <li><a href="contact.php"><h4>contact</h4></a></li>
        			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><h4><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['type'];?></h4> <span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
        				</li>
   					</ul>
			</div>
		
	</div>	
</nav>
<br/><br/><br/><br/><br/>
<div class="page-header no-margin no-padding" >
	<div class="container" style="width:100%;">
	<img src="cover.jpg" class="img-responsive" width="100%">
	</div>
</div>

<br/>
<div class="container" style="width:100%;background:#F58220;">
	<div class="page-header">
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
				<img src="college.jpg" class="pull-left">
				<h2><?php echo $col;?> Colleges </h2>
			</div>			
			
<?php
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->event;
$event=$collection->count();

?>

			<div class="col-md-3 col-md-offset-1 ">
				<img src="city.jpg" class="pull-left">
				<h2><?php echo $event;?> Events </h2>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<img src="sponsor.jpg" class="pull-left">
				<h2>Sponsor Now </h2>
			</div>
		</div>
	</div>
</div>

<!--footer starts-->

<footer class="site-footer">
<div class="container">
<div class="col-md-5">  @ 2015 Copyrights Mycollegefest | All rights Reserved.</div>
<div class="col-md-7"></div>
<ul class="footer-nav">
<li><a href="home.php">Home</a><li>
<li><a href="aboutus.php">About Us</a><li>
<li><a href="contact.php">Contact Us</a><li>

</ul>
</div>
</div>
</footer>

<!--footer ends-->




<script src="js/jquery_min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</body>

</html>
}
else{
?>


<?php } ?>