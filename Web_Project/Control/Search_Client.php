<?php
//include('../Model/database.php');

if (isset($_POST['search']))
{
   if(empty($_POST['username'])){echo "*Enter your username please!!!";}
   else
   {
    $word=$_POST['username'];
    $connection = new db();
    $conobj=$connection->OpenCon();

$userQuery=$connection-> Search($conobj,"user",$word);

}
if ($userQuery->num_rows > 0)
{
   echo "<table border=3><tr><th>Name</th><th>User Name</th><th>Email</th><th>Password</th></tr>";
   while($row = $userQuery->fetch_assoc()) 
   {
     echo "<tr><td>".$row["name"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "No data Found";
 }

 $connection->CloseCon($conobj);
    
}


?>

