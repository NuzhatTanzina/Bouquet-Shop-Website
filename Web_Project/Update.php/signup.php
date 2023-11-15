<?php

include('../Control/Reg_User.php');
include '../Control/Json.php';

if(isset($_SESSION['username'])){
header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <script src="../js/myjs.js"></script> 
</head>
<body>

<p id="mytext"></p>  
 <form align="center" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateSignUpForm()" method="post" enctype="multipart/form-data"> 
                                              <h1>Sign Up</h1>
    Full Name: <input type="text" id="name" name="name" placeholder="Enter your name" >    <?php echo $ch1; ?> <br>
    User Name: <input type="text" id="username" name="username"  placeholder="Enter your username"onkeyup="finduserName()" > <?php echo $ch2; ?><br>
   <p id="check"></p>
    Email:<input type="text" id="email" name="email" placeholder="Enter your email"onkeyup=" findEmail()" > <?php echo $ch4; ?><br>
    <p id ="check1"></p>
     Contact No:<input type="text" id="contact" name="contact" placeholder="Enter your contact no" ><?php echo $ch3 ?><br>
    Password: <input type="password" id="password" name="password" placeholder="Enter your password" > <?php echo $ch5; ?><br>
    Insert Image: <input type="file" id="document" name="filetoupload"  > <?php echo $ch6;?> <br>
    <br>
    <input name="submit" type="submit" value="SIGN UP">
</form>
<br>
<?php echo $error; ?>

</body>
</html>
 