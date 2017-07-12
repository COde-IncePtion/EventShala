<?php session_start();?>
<?php if (isset($_SESSION['email'])) { ?>
<?php
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->studrg;
$email=$_SESSION['email'];
$data= array("email"=>$email);
$cursor = $collection->find($data);
foreach ($cursor as $cursor)
{
  $name=$cursor['name'];
  $mob=$cursor['mobile'];
}
//var_dump($data);

?>

<!doctype  html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpport" content="width=device-width,intial-scale=1.0">
<title>College Register</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse no-margin" role="navigation">
<div class="container-fluid">
<a class="navbar-brand" href="#"><img src="E:\bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\logo.png"</a>
<div class="navbar-header navbar-right">
     

 <div class="collapse navbar-collapse navbar-right no-margin"  id="bs-WDM-navbar-collapse-1 "><ul class="nav navbar-nav">
<li><a href="home.php"><h4>Home</h4></a></li>
<li><a href="aboutus.php"><h4>About</h4></a></li>


<li><a href="contact.php"><h4>contact</h4></a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4><span class="glyphicon glyphicon-user"></span> <?php echo $name;?></h4> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
          </ul>
        </li>
</ul>
</div>
</div>
</nav>
<br/>
<div class="container">
<div class="well">
<?php
$email=$_GET['param1'];
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->event;
$data= array("email"=>$email);
$f=0;
if($cursor = $collection->find($data))
foreach ($cursor as $cursor)
{
  $event=$cursor['ename'];
  $desc=$cursor['edescribe'];
  $reg=$cursor['reg'];
  echo "<div class='panel panel-primary'><div class='panel-heading'><h4 align=center>".$event."</h4></div><div class='panel-body'>".$desc."</div></div>";
  echo "<button type='button' class='btn btn-warning'><a href='ereg.php?param1=".$email."&param2=".$event."'>Click here to get Registered for event</a></button>";
  echo "<br>";
  echo "<hr style='color:red;'>";
  $f++;
}
if($f==0)
{
  echo "<div class='panel panel-danger'><div class='panel-heading'>No Event Added<h4 align=center></h4></div></div>";
}
?>							 
		</div>
    </div>	
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>				
<!--footer starts--></div>

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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
}
else{
header("location:login.php");
 } ?>
