<?php
$connection= new MongoClient();
$db= $connection->clgfst;
$ename=$_GET['param1'];
$collection= $db->event;
//$email=$_SESSION['email'];
$data= array("ename"=>$ename);
if($cursor=$collection->remove($data))
{
	header("location:colprof.php");
}
 ?>