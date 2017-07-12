<!doctype  html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpport" content="width=device-width,intial-scale=1.0" >
<title>Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse no-margin" role="navigation">
<div class="container-fluid">
<a class="navbar-brand" href="#"><img src="E:\bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\logo.png"</a>
<div class="navbar-header navbar-right">
     

 <div class="collapse navbar-collapse navbar-right no-margin"  id="bs-WDM-navbar-collapse-1 "><ul class="nav navbar-nav">
<li><a href="home.php"><h4>Home</h4></a></li>
<li><a href="link.php"><h4>Register</h4></a></li>
<li><a href="about1.php"><h4>About Us</h4></a></li>
<li><a href="contact1.php"><h4>contact Us</h4></a></li>
</ul>
</div>
</div>
</nav>
<br/>
<nav class="navbar navbar-default no-margin" role="navigation">
<div class="container    " style="font-size: 26px;font-family: 'Open Sans';
    text-transform: uppercase;width:100%;height:100%;">

<h1 style="margin-left:200px;"> LOGIN</h1>
</div>
</nav>
<br/>
<nav class="navbar navbar no-margin" role="navigation">
<div class="container    " style="font-size: 26px;font-family: 'Open Sans';
    text-transform: uppercase;width:100%;height:100%;">

<h3 style="margin-left:200px;">Please Enter your Login Details</h3>
</div>
</nav>
<br/>
<div class="container">
  <div class="well">
<form role="form" action="log.php" method="post">
<input type="radio" name="col" value="college"> <label><strong>College</strong></label>
<input type="radio" name="col" value="student" style="margin-left:50px;"> <strong>Student</strong>
               
  <div class="container">
    <div class="form-group">
      <label for="email"><strong><h3>Email:</h3></strong></label>
      <input type="email" name="email" class="form-control" id="email" style="width:400px;" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd"><strong><h3>Password:</h3></strong></label>
      <input type="password" name="password" class="form-control" id="pwd" style="width:400px;" placeholder="Enter password">
    </div>
   <!-- <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>-->
<input type="submit" name="submit" class="btn btn-success btn-lg" style="margin-left:300px;width:100px;"value="Signup"/>
  </form>
  <br/><h3><a href="link.php" style="">Register Here</a></h3>

</div>
</div>  
<br/><br/>             
<!--footer starts-->
</div>
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

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
