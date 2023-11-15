<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "tourism";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
 $result = $conn->query("SELECT * FROM $table WHERE username='$username' AND password='$password'");
 return $result;
 }
 // test
  function Find_user($conn ,$table,$username,$password){
      $test=$conn->query("SELECT * FROM $table WHERE usename='$username' AND  password='$password'");
      return $result;
      

  }

// insert value  
function  Insert_user($conn,$table,$name){
  
}


 function InsertUser($conn,$table,$name,$username,$email,$password)
 {
$result = $conn->query("INSERT INTO $table (name, username, email,password) VALUES ('$name','$username', '$email', '$password')");
return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 
function Finduser($conn,$table,$username)
 {
$result = $conn->query("SELECT * FROM  $table WHERE username='$username'");
 return $result;
 }
 //ajax for email
 function findEmail($conn,$table,$email)
 {
$result = $conn->query("SELECT * FROM  $table WHERE email='$email'");
 return $result;
 }

 //client search using like operator
  function Search($conn, $table,$word){
   $result=$conn->query("SELECT * FROM $table WHERE username LIKE '%$word%'");
   return $result;
 } 
  //dELETE USER
  function userDelete($conn,$table,$username){
    $result=$conn->query("DELETE FROM $table WHERE username='$username'");
    return $result;
  }
  //Update user information 
  
   function updateUser($conn,$table,$username,$email){
    $result = $conn->query("UPDATE $table SET  email='$email' WHERE username='$username'");
     return $result;
   }


function CloseCon($conn)
 {
 $conn -> close();
 }

?>