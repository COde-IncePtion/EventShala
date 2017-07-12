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
<title>Colleges</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse no-margin" role="navigation">
<div class="container-fluid">
<a class="navbar-brand" href="#"><img src="logo.png""</a>
<div class="navbar-header navbar-right">
     

 <div class="collapse navbar-collapse navbar-right no-margin"  id="bs-WDM-navbar-collapse-1 "><ul class="nav navbar-nav">
<li><a href="home.php"><h4>Home</h4></a></li>


<li ><a href="studentprof.php"><h4>Profile</h4></a></li>
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
  <h2 align=center><span class="label label-default">Colleges holding Events</h2></span>
  <table class="table">
    <thead>
      <tr>
        <th>Serial no.</th>
        <th>College Name</th>
      </tr>
    </thead>
    <tbody>
<?php
$conn=new MongoCLient();
$db=$conn->clgfst;
$collection=$db->clgrg;
$i=0;
$cursor=$collection->find();
foreach ($cursor as $cursor) {
  $i++;
  $cl=$cursor['email'];
  $clg=$cursor['college'];
  echo "<tr class='success'><td>".$i."</td><td><a href='cevent.php?param1=".$cl."'>".$clg."</a></td></tr>";
  echo "<br>";

}


     
    





?>							 
	</tbody>
  </table>
</div>		</div>
      </div>		
<br/><br/><br/><br/><br/><br/><br/><br/><br/> <br/> 
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
