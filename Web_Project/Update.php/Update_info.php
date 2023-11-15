<?php include('../Control/Update.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_INFO</title>
    <script src="../js/myjs.js"></script>
</head>
 
<body>
    <?php //name username  email  contact password filetoupload                ?>
    <form align=center action="" method="post" onsubmit="return validateSignUpForm() ">
                <h1>Update!</h1>
        Username:    <input type="text" id="" name="username"><br> 
        Email:    <input type="email" id="" name="email"><br> <?php echo $ch4;?>

        <input name="submit" type="submit" value="Update">





    </form>
</body>
</html>