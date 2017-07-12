<?php
session_start();
$email=$_SESSION['email'];
echo $email;
$clg=$_GET['param1'];
$event=$_GET['param2'];
$conn=new MongoCLient();
$db=$conn->clgfst;
$collection1=$db->event;
echo $clg;
$data=array("email"=>$clg);
$cursor=$collection1->find($data);
foreach ($cursor as $cursor) {
	$reg=$cursor['reg'];
	$eve= $cursor['ename'];
	if($eve==$event)
	{
		$reg++;
		$newdata = array('$set' => array("reg" => $reg));
		$collection1->update(array("ename" => $eve), $newdata);
	}
	echo $cursor['reg'];
	echo "<br>";
}

$collection= $db->clgrg;
$data= array("email"=>$clg);
$cursor = $collection->find($data);
foreach ($cursor as $cursor)
{
  $college=$cursor['college'];
  $state=$cursor['state'];
  $fest=$cursor['fest'];
  $dfrom=$cursor['dfrom'];
  $dto=$cursor['dto'];
  $description=$cursor['describe'];
}

$collection2=$db->studeve;
$da= array("email"=>$email, "event"=>$event,"college"=>$college,"dfrom"=>$dfrom,"dto"=>$dto,"fest"=>$fest);
if($collection2->insert($da))
	echo "inserted";
header("location:studentprof.php")

?>