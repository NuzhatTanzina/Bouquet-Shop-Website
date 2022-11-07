<?php   include "..\control\signupControl.php" ; ?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
</head>
<body>
<h1> Signup for Delivery Man </h1>
<form action="" method="post" enctype="multipart/form-data">
<br>   
Full Name: <input type="text" name="name" placeholder="Enter your name" > <?php echo $nameError; ?> <br>
<br>   
User Name: <input type="text" name="username" placeholder="Enter your username" > <?php echo $errorUserName; ?> <br>
<br>
Gender: <input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other <?php echo $errorGender; ?><br>
<br>
Email: <input type="text" name="email" placeholder="Enter your email"> <?php echo $errorEmail; ?> <br>
<br>
Contact No: <input type="text" name="contact" placeholder="Enter your contact no" > <?php echo $errorContact; ?> <br>
<br>
Location: <input type="text" name="location" placeholder="Enter your location" > <?php echo $errorLocation; ?> <br>
<br>
Password: <input type="password" name="password" placeholder="Enter your password"> <?php echo $errorPass; ?> <br>
<br>
Insert Image: <input type="file" name="filetoupload"> <?php echo $errorFile; ?>
<br> <br>
<input name="submit" type="submit" value="SIGN UP">
<input name="reset" type="reset" value="RESET">
<br><br>
</form>


</body>
</html>