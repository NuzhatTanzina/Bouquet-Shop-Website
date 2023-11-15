<?php
include('../Control/User_Process.php');

if(isset($_SESSION['username']))
{
header("location: Admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>      
<script src="../js/myjs.js"></script>
</head>

<body>

<p id="mytext"></p>  


<form  align="center" name="myForm" action="" onsubmit="return validateForm()" method="post">
                        
                                   <h2>Login</h2>          
<input type="text" id="username" name="username" placeholder="Enter your username" >
    <input type="password" id="password" name="password" placeholder="Enter your password" >
    <input name="submit" type="submit" value="LOGIN">

<br>
If you don't have a account <a href="signup.php">SignUp Here</a>
<br> <br>
</form>
<?php echo $error; ?>
<?php echo "";?>

</body>
</htm