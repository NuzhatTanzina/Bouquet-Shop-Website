<?php
include('../Model/database.php');

if (empty($_REQUEST["x"]))
{
    echo "Enter your username please!!!";
}
else
{
    $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection-> Finduser($conobj,"user",$_REQUEST["x"]);

if ($userQuery->num_rows > 0)
{
   echo "Username cannot be taken.";
}
else
{
    echo "Username is unique.";
}
$connection->CloseCon($conobj);
}
?>

