<?php
//include('../Model/database.php');

if(isset($_REQUEST['submit'])){
    if(empty($_POST['username'])){
        echo "*username not found";
    }
    else
   {
    $x=$_POST['username'];
    $connection = new db();
    $conobj=$connection->OpenCon();
    $showall=$connection->userDelete($conobj,"user" ,$x);

 echo $x."  <b> is deleted successfully<b>" ;

}
 

 $connection->CloseCon($conobj);
    
}









?>