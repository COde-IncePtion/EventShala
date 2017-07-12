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

&nbsp;&nbsp;<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COLLEGE REGISTER</h1>&nbsp;&nbsp;
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
 
  <form role="form" method="post">
    <div class="well">
    <div class="form-group">
      <label for="email"><strong><h3>EMAIL-ID *</h3></strong></label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd"><strong><h3>Password *</h3></strong></label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
	 <div class="form-group">
      <label for="name"><strong><h3>College Name * </h3></strong></label>
      <input type="text" name="college" class="form-control" id="name" placeholder="Enter College Name">
    </div>
    <div class="form-group">
      <label for="add"><strong><h3>Address *</h3></strong></label>
      <input type="text" name="address" class="form-control" id="add" placeholder="Enter Address">
    </div>
	<div class="form-group">
      <label for="add"><strong><h3>State *</h3></strong></label>
      <input type="text" name="state" class="form-control" id="state" placeholder="Enter State">
	 </div>
   <div class="form-group">

   <label for="text"><strong><h3>Festivals Name</h3></strong></label>
     <input type="text" name="fest"  class="form-control" id="email" placeholder="Festivals Name">
   </div>
    <div class="form-group">
      <label for="text"><strong><h1><u>Date</u> </h1></strong></label>
      
    </div>
   
   <div class="row">
    <div class="col-sm-6">
      <label for="name"><strong><h3>From</h3></strong></label>
      <input type="date" name="dfrom" class="form-control" id="name" placeholder="Date till">
    </div>
    <div class="col-sm-6">
      <label for="add"><strong><h3>To</h3></strong></label>
      <input type="date" name="dto"class="form-control" id="add" placeholder="Date to">
    </div>
   <div class="form-group">
      <label for="add"><strong><h3>Describe an Event</h3></strong></label>
      <input type="text" name="describe" class="form-control" id="add" placeholder="Describe Event">
    </div>
  </div>
	<br/><br/>
<input type="submit" name="submit" class="btn btn-success" value="Register" style="width:300px;margin-left:350px;"> 
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
session_start();
if(IsSet ($_POST['submit']))
{
if(!$connection= new MongoClient())
{
  echo"lode lag gye";
  exit();
}
if(!$db= $connection->clgfst)
{
  echo"database failed";
  exit();
}

if(!$collection= $db->clgrg)
{
  echo"collection failed";
  exit();
}
$i=0;
$dat=array("email"=>$_POST['email']);
$cursor = $collection->find($dat);
foreach ($cursor as $cursor)
{ $i++;
}
if($i!=0)
{
  print '<script type="text/javascript">'; 
print 'alert("The email address '. $_POST['email'].' is already registered")'; 
print '</script>'; 
}
else
{
$_SESSION['email']=$_POST['email'];
$data= array("email"=>$_POST['email'], "password"=>$_POST['password'],"college"=>$_POST['college'],"address"=>$_POST['address'] ,"state"=>$_POST['state'],"fest"=>$_POST['fest'],"dfrom"=>$_POST['dfrom'],"dto"=>$_POST['dto'],"describe"=>$_POST['describe']);

if($collection->insert($data))
{
  echo "inserted successfully";
  $_SESSION['type']="college";
  echo("<script>location.href = 'login.php';</script>");
}
else
{
  echo "not inserted";
}

}

}
?>

