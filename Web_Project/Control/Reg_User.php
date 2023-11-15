<?php
include('../Model/database.php');


 $error="";
 $ch1=$ch2=$ch3=$ch4=$ch5=$ch6="";
 $message="";
// store session data
//name , username , contact , password , file , filetoupload

if (isset($_POST['submit'])) {
if (empty($_POST['name']) || (strlen($_POST['name'])<5))  {
$ch1 = "*First name should be not empty and  5 character ";
}
if(empty($_POST['username'])){$ch2="*username not empty";}
if(empty($_POST['contact']) || (strlen($_POST['contact'])>11)){ $ch3="*not extend 11 digit";}
if(empty($_POST['email']) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST['email'])){$ch4="*valid email";}
if(empty($_POST['password'])|| (strlen($_POST['password'])<6)){$ch5="*must be 6 char";}
//if(empty($_POST['filetoupload'])){$ch6="*no file yet";}
/* 
if (empty($_POST['filetoupload']))
    {
     $ch6 = "Please select correct document";
    }
    else
    {
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
        {
        echo "Sorry, only PDF, DOC & DOCX files are allowed.";
        }
    }
 */

 //if($ch1==""&&$ch2=="" && $ch3=="" &&$ch4==""&&$ch5==""&&$ch6=="") {
else{
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

// -------=============--------

$userQuery=$connection->InsertUser($conobj,"user",$name,$username,$email,$password);

if ($userQuery===TRUE) 
{
$error = "Data inserted";
}
else {
$error = "Data not inserted";
}
$connection->CloseCon($conobj);

}
//------------------------Files--------------------------
$target_dir = "../files/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];

	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo $_FILES["filetoupload"]["type"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>