<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location:login.php"); // Redirecting To Home Page
}
else
{
    $cookie_value=$_SESSION["username"];
}
$cookie_name = "Admin";

setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");


?>
<!DOCTYPE html>
<html>
<body>
    <?php  
    if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
}
 else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
} 

?>
<h2 >Welcome to Admin dashboard.</h2>

<h1 > H1!, </h1><?php echo "<b>" .$_SESSION["username"]."</b>";?>
<?php  include('../Control/AdminControl.php'); 

   

 ?>
<br/>

<!-- Search Client  -->



<form action="" method ="post"> Client name:<input type="text" id="" name="username"> 

<input type="submit" id="" name="search">
</form>
 <br> <br>
<?php   include('../Control/Search_Client.php');?>
<!-- DElete USer -->
<form action=""method="post">
    Delete User: <input type ="text"id="" name="username" placeholder="username">
    <input type="submit" id="" name="submit" value="delete">

</form>
<br/>
<?php include('../Control/Delete_User.php');?>
<br>

 Add user:<a href="Signup.php"> click here</a> <br>
 View User: <a href="../Control/Show.php">Click Here</a>
 Update User Info: <a href="Update_info.php">click Here</a>
 View Feedback: <a href="Feedback.php"> Click Here </a>
 <br> <br>
Do you want to<button><a href="../Control/Logout.php">logout</a></button>
</body>
</html>

<?php


?>   