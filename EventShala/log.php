<?php
session_start();
  if(!empty($_POST['email']))
  {
    $type=$_POST['col'];
    echo $type;
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email&&$password)
    {
      echo"valid";
      $connection= new MongoClient();
      $db= $connection->clgfst; 
        if ($type=="student")
        {
          $collection= $db->studrg;
          $query = array('email' => $email);
          $cursor = $collection->find($query);
          foreach ($cursor as $cursor)
          {
           $pass=$cursor['password'];
           if($pass==$password)
            {
              $_SESSION['type']="student";
              $_SESSION['email']=$email;
              echo "Session name :";
              header("location:studentprof.php");
            }
            else
            {
              echo "Wrong Password";
              echo "<a href='login.php'>Try Again</a>";
            //header("location:index.html");
            }
          }
        }
      
      else
      {
         $collection= $db->clgrg;
         $query = array('email' => $email);
         $cursor = $collection->find($query);
         foreach ($cursor as $cursor)
         {
          $pass=$cursor['password'];
          if($pass==$password)
           {
             $_SESSION['type']="college";
             $_SESSION['email']=$email;
             echo "Session name :";
             header("location:colprof.php");
           }
           else
           {
             echo "Wrong Password";
             echo "<a href='login.php'>Try Again</a>";
           //header("location:index.html");
           }
         }
       }
     }
      else
      echo"Please fill details ";
  }

?>