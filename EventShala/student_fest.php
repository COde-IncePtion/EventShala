<?php session_start();?>
<?php if (isset($_SESSION['email'])) { ?>

<?php
$connection= new MongoClient();
$db= $connection->clgfst;
$collection= $db->studentrg;
$email=$_SESSION['email'];
$data= array("email"=>$email);
$cursor = $collection->find($data);
foreach ($cursor as $cursor)
{
	$name=$cursor['name'];
  $college=$cursor['college'];
  $state=$cursor['state'];
  $adress=$cursor['address'];
  $state=$cursor['state'];  
}
//var_dump($data);

?>
<!doctype  html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpport" content="width=device-width,intial-scale=1.0">
<title>Festivals</title>
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
<li><a href="aboutus.php"><h4>About</h4></a></li>
<li class="active"><a href="colprof.php"><h4>Profile</h4></a></li>

<li><a href="contact.php"><h4>contact</h4></a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4><span class="glyphicon glyphicon-user"></span> <?php echo $name;?></h4> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>  Logout</a></li>
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

<form action="student_fest.php" method="post">

<nav class="navbar navbar-default no-margin" role="navigation">
  <h1 align="center" style="font-style:'AR DESTINE'"><span class="label label-warning"><?php echo $name;?></span></h1><br/><br/>
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
 <div>

 
 <div align="center">
	<ul align="center">
		<li align="center" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Choose A college</h4> <span class="caret"></span></a>
          <ul align="center" class="dropdown-menu">
			<!--<li align="center"><a href="#"><span class="glyphicon glyphicon-off"></span>  AIT</a></li>-->
            
			<?php
			$connection=new MongoClient();
			$db=$connection->clgfst;
			$collections=$db->clgrg;
			$cursor = $collection->find();
			foreach($cursor as $document){
			{
				//$data=$document["college"];			
				$data.= "<li align=center><a href=#>.$document['college'].;	</a></li>";
			}
			 echo $data;
			?>
			
			
          </ul>
        </li>
	</ul>
	
	
 
 </div>
 
 
 
</form> 
<!--footer starts-->
</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

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

<script src="js/jquery_min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
}
else{
header("location:login.php");
 } ?>