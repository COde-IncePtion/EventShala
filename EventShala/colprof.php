<?php session_start();?>
<?php if (isset($_SESSION['email'])) { ?>

<?php
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->clgrg;
$email=$_SESSION['email'];
$data= array("email"=>$email);
$cursor = $collection->find($data);
foreach ($cursor as $cursor)
{
  $college=$cursor['college'];
  $state=$cursor['state'];
  $adress=$cursor['address'];
  $state=$cursor['state'];
  $fest=$cursor['fest'];
  $dfrom=$cursor['dfrom'];
  $dto=$cursor['dto'];
  $description=$cursor['describe'];
}
//var_dump($data);

?>
<!doctype  html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpport" content="width=device-width,intial-scale=1.0">
<title>College Profile</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse no-margin" role="navigation">
<div class="container-fluid">
<a class="navbar-brand" href="#"><img src="logo.png"</a>
<div class="navbar-header navbar-right">
     

 <div class="collapse navbar-collapse navbar-right no-margin"  id="bs-WDM-navbar-collapse-1 "><ul class="nav navbar-nav">
<li><a href="home.php"><h4>Home</h4></a></li>

<li class="active"><a href="colprof.php"><h4>Profile</h4></a></li>
<li><a href="aboutus.php"><h4>About</h4></a></li>
<li><a href="contact.php"><h4>contact</h4></a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4><span class="glyphicon glyphicon-user"></span> <?php echo $college;?></h4> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
          </ul>
        </li>

</ul>
</div>
</div>
</nav>
<br/>

<nav class="navbar navbar-default no-margin" role="navigation">
  <h1 align="center" style="font-style:'AR DESTINE'"><span class="label label-warning"><?php echo $college;?></span></h1><br/><br/>
</nav>
<br/>

<div class="row">
    <div class="col-sm-2" style="height:600px;border:2px solid #A9A9A9;background-color:#DCDCDC;border-radius:6px;margin-left:10px;" bgcolor="orange">
        <br/>
        <!--<img src="logo.png" class="img-circle"/><br/>-->
        Username : <p class="bg-info"><?php echo $email;?></p>
        College Name : <p class="bg-info"><?php echo $college;?></p>
        Address : <p class="bg-info"><?php echo $adress;?></p>
        State : <p class="bg-info"><?php echo $state;?></p>
    </div>
    <div class="col-sm-9">
    <div class="container">
        <div class="row" >
            <div class="col-sm-11">
                <div class="well">
                  <h2><span class="label label-default">Fest Name :  <?php echo $fest;?></h2></span>
                  <h2><span class="label label-default">Start On : <?php echo $dfrom;?></h3>
                  <h2><span class="label label-default">End On :  <?php echo $dto;?></h3>
                  <h2><span class="label label-default">Description : </span></h3>
                    <div class="well"><h3> <?php echo $description;?></h3></div>
                   </div> 
<?php

$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->event;
//$email=$_SESSION['email'];
$data= array("email"=>$email);
$f=0;
if($cursor = $collection->find($data))
foreach ($cursor as $cursor)
{
  $event=$cursor['ename'];
  $desc=$cursor['edescribe'];
  $reg=$cursor['reg'];
  echo "<div class='panel panel-primary'><div class='panel-heading'><h4 align=center>".$event."</h4></div><div class='panel-body'>".$desc."</div><div class='panel-body'>Registered Users : ".$reg."</div></div>";
  echo "<button type='button' class='btn btn-warning'><a href='del.php?param1=".$event."'>Delete Event</a></button>";
  echo "<button type='button' class='btn btn-warning' style='margin-left:10px;'><a href='modify.php?param1=".$event."'>Modify Event</a></button>";
  
  echo "<br><hr>";
  $f++;
}
if($f==0)
{
  echo "<div class='panel panel-danger'><div class='panel-heading'>No Event Added ad new<h4 align=center></h4></div></div>";
}
?>
            </div>

            <div class="col-sm-6">
                
            </div>
        </div>
    </div>
    <br/>
    <button type="button" class="btn btn-warning" style="margin-left:800px;"><a href="colevent.php"><span class="glyphicon glyphicon-plus"></span> Add Events</a></button>
</div>

</div>
<!--footer starts-->

<footer class="site-footer">
<div class="container">
<div class="col-md-5"> <span class="glyphicon glyphicon-copyright-mark"></span> 2015 Copyrights Mycollegefest | All rights Reserved.</div>
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