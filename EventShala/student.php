<!doctype  html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpport" content="width=device-width,intial-scale=1.0">
<title>Student</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse no-margin" role="navigation">
<div class="container-fluid">
<a class="navbar-brand" href="#"><img src="E:\bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\logo.png"</a>
<div class="navbar-header navbar-right">
     

 <div class="collapse navbar-collapse navbar-right no-margin"  id="bs-WDM-navbar-collapse-1 "><ul class="nav navbar-nav">
<li><a href="home.php"><h4>Home</h4></a></li>
<li><a href="aboutus.php"><h4>About Us</h4></a></li>


<li><a href="contact.php"><h4>contact Us</h4></a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Register</h4> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="student.php">Student</a></li>
            <li><a href="college.php">College</a></li>
            
           <!-- <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"></a></li>-->
          </ul>
        </li>

</ul>
</div>
</div>
</nav>
<br/>
<nav class="navbar navbar-default no-margin" role="navigation">
<div class="container    " style="font-size: 26px;font-family: 'Open Sans';
    text-transform: uppercase;width:100%;height:100%;">

&nbsp;&nbsp;<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STUDENT REGISTER</h1>&nbsp;&nbsp;
</div>
</nav>
<br/>
<nav class="navbar navbar no-margin" role="navigation">
<div class="container    " style="font-size: 26px;font-family: 'Open Sans';
    text-transform: uppercase;width:100%;height:100%;">

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please enter the information below to register</h3>
</div>
</nav>
<br/>

						 
	<div class="container">
 
  <form method="post">
    <div class="form-group">
      <label for="email"><strong><h3>Email:</h3></strong></label>
      <input type="email" name="email" class="form-control"   placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd"><strong><h3>Password:</h3></strong></label>
      <input type="password" name="password" class="form-control"   placeholder="Enter password">
    </div>
	 <div class="form-group">
      <label for="name"><strong><h3>Name</h3></strong></label>
      <input type="name"name="name" class="form-control"   placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="add"><strong><h3>Mobile no.</h3></strong></label>
      <input type="text"   name="mobile"  class="form-control" placeholder="Enter mobile no.(only 10 digits)">
    </div>
   
	<br/><br/>
<input type="submit" name="submit" class="button2" value="submit"> 
 </form>
</div>	
<br/><br/>	
					 
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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

if(IsSet ($_POST['submit']))
{
echo "hello";
$connection= new MongoClient();

$db= $connection->clgfst;

$collection= $db->studrg;

$data= array("email"=>$_POST['email'], "password"=>$_POST['password'],"name"=>$_POST['name'],"mobile"=>$_POST['mobile']);

$collection->insert($data);
$_SESSION['type']="student";
echo'data Inserted<br/>';
header("location:studentprof.php");
echo'<br/>';
var_dump($data);
}
?>


