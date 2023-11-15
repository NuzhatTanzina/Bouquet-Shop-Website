<?php
include('../Model/database.php');

if (empty($_REQUEST["y"]))
{
    echo "*Enter your username please!!!";
}
else
{
    $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection-> findEmail($conobj,"user",$_REQUEST["y"]);

if ($userQuery->num_rows > 0)
{
   echo " *email has already taken.";
}
else
{
    echo "*email is unique.";
}
$connection->CloseCon($conobj);
}
?>

