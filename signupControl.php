<?php
$error=$radioGender=$nameError=$errorUserName=$errorPass=$errorEmail=$errorContact=$errorGender=$errorLocation=$errorFile=$userNameTaken="";

if (isset($_POST['submit'])) 
{
    if (empty($_POST['name'])) 
    {
        $nameError = "Name is required";
    } 
    else 
    {
        $name = $_POST['name'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
        {
            $nameError = "Only letters and white space allowed";
        }
    }
    if (empty($_POST['username']))
    {
        $errorUserName = "Invalid username was Provided";
    }
  
	if(isset($_REQUEST["gender"]))
	{
		$radioGender= "Gender - ".$_REQUEST["gender"];
	}
	else
	{
		$errorGender= " Please Select Your Gender";
		$Error=true;
	}
    if (empty($_POST["email"])) 
    {
        $errorEmail = "Email is required";
    } 
    else 
    {
        $email = $_POST["email"];
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) 
        {
            $errorEmail = "Invalid email format";
        }
    }
    if (empty($_POST['contact'])) 
    {
        $errorContact = "Contact is required";
    }
    else
    {
        $contact = $_REQUEST["contact"];
        if (strlen($contact)!=11 && strlen($contact)!=14)
        {
            $errorContact = "Invalid contact format";
        }
    }
	if (empty($_POST['location']))
    {
        $errorLocation = "Invalid Location was Provided";
    }
    if (empty($_POST['password'])) 
    {
        $errorPass = "Password is required";
    }
    else
    {
        $password=$_POST['password'];
        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password))
        {
            $errorPass = "Invalid Password was Provided";
        }
    }
	if (isset($_FILE['filetoupload'])) 
	{
		$errorFile = "No Picture was Provided";
	}

	
if ( $nameError=="" && $errorUserName=="" && $errorGender=="" && $errorEmail=="" && $errorContact=="" && $errorLocation=="" && $errorPass=="" && $errorFile=="")
{
	$Name=$_REQUEST["name"];
	$Username=$_REQUEST["username"];
	$Email=$_REQUEST["email"];
	$Password=$_REQUEST["password"];
	$Location=$_REQUEST["location"];
	$Contact=$_REQUEST["contact"];
	$Name=$_REQUEST['name'];

	$target_File="../file/".$_FILES["filetoupload"]["name"];
	if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_File))
    {
        echo "You have uploaded a new file";
    }
	
	$formdata = array(
        'Name'=> "$Name",
		'Username'=> "$Username",
		'Gender'=>"$radioGender",
        'Email'=> "$Email",
        'Password'=>"$Password",
        'Phone'=>"$Contact",
        'Location'=>"$Location",
     );
    
  
}



}

?>