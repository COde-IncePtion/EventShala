<?php session_start();?>
<?php if (isset($_SESSION['email'])) { ?>
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
<a class="navbar-brand" href="#"><img src="logo.png"</a>
<div class="navbar-header navbar-right">
     

 <div class="collapse navbar-collapse navbar-right no-margin"  id="bs-WDM-navbar-collapse-1 "><ul class="nav navbar-nav">
<li><a href="home.php"><h4>Home</h4></a></li>
<li><a href="colprof.php"><h4>Profile</h4></a></li>
<li><a href="aboutus.php"><h4>About</h4></a></li>
<li><a href="contact.php"><h4>contact</h4></a></li>

       

<!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Register</h4> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Student</a></li>
            <li><a href="#">College</a></li>
            <li><a href="#">Brand</a></li>
           <!-- <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>
          </ul>
        </li>-->

</ul>
</div>
</div>
</nav>
<br/>
<nav class="navbar navbar-default no-margin" role="navigation">
<div class="container    " style="font-size: 26px;font-family: 'Open Sans';
    text-transform: uppercase;width:100%;height:100%;">

&nbsp;&nbsp;<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span>Add Event</h1>&nbsp;&nbsp;
</div>
</nav>
<br/>
<nav class="navbar navbar no-margin" role="navigation">
<div class="container    " style="font-size: 26px;font-family: 'Open Sans';
    text-transform: uppercase;width:100%;height:100%;">

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please enter the information below to register new event</h3>
</div>
</nav>
<br/>

							 
	<div class="container">
 
  <form role="form" method="post">
    <div class="well">
    <div class="form-group">
      <label for="email"><strong><h3>Event Name *</h3></strong></label>
      <input type="text" name="ename" class="form-control" id="email" placeholder="event name">
    </div>
    
   <div class="form-group">
      <label for="add"><strong><h3>Describe an Event</h3></strong></label>
      <input type="text" name="edescribe" class="form-control" id="add" placeholder="Describe Event">
    </div>
  </div>
	<br/><br/>
<input type="submit" name="submit" class="btn btn-success" value="Add This" style="width:300px;margin-left:350px;"> 
 </form>
</div>	
<br/><br/>						 
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

if(IsSet ($_POST['submit']))
{
if(!$connection= new MongoClient())
{
  echo"connection failed";
  exit();
}
if(!$db= $connection->clgfst)
{
  echo"database failed";
  exit();
}

if(!$collection= $db->event)
{
  echo"collection failed";
  exit();
}
echo "";
$email=$_SESSION['email'];
echo $email;
$data= array("email"=>$email,"ename"=>$_POST['ename'],"edescribe"=>$_POST['edescribe'],"reg"=>0);

if($collection->insert($data))
{
  echo "inserted successfully";
  echo("<script>location.href = 'colprof.php';</script>");
}
else
{
  echo "not inserted";
}


echo'<br/>';
var_dump($data);
}
?>
<?php 
}
else{
header("location:login.php");
 } ?>
