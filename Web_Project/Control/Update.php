<?php
include ('../Model/database.php');
    $ch4="";
   if(isset($_REQUEST['submit'])){
    if(empty($_POST['email']) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST['email']))
    {$ch4="*valid email";}
   if($ch4==""){
    $connection = new db();
    $conobj=$connection->OpenCon();
    //  function updateUser($conn,$table,$username,$email,$password)
    $username=$_POST['username'];
    $email=$_POST['email'];
    //$password=$_POST['password'];
    $showall=$connection->updateUser($conobj,"user" ,$username,$email);
    

    echo $username."  <b> updated successfully<b>" ;
   
   }
    
   
    $connection->CloseCon($conobj);
       
   }



      
   
      










?>