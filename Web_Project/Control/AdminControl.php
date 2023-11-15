<?php
/* session_start(); 
if(empty($_SESSION[""])) 
{
header("Location: ../view/Admin.php");
} */
include "../Model/database.php";
        $connection=new db();
        $conobj=$connection->OpenCon();

        $showall=$connection->ShowAll($conobj,"admin");

      /*   if ($showall->num_rows > 0) {
        
            while($row = $showall->fetch_assoc()) {

                  $name= $row['name'];
                  $username=$row['username'];
                  $email=$row['email']; 
                  $password=$row['password'];
             
                
            
              echo "  Email : ".$name."<br>";
              echo " Password : ".$username."<br>";
              echo "first name: ".$email."<br>";
              echo " last name : ".$password."<br>";
            

           } */

           if ($showall->num_rows > 0)
 {
    echo "<table border=3><tr><th>Name</th><th>User Name</th><th>Password</th><th>Address</th></tr>";
    while($row = $showall->fetch_assoc()) 
    {
      echo "<tr><td>".$row["A_Name"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No data Found";
  }
$connection->CloseCon($conobj);
$error="submitted" ;
    

    ?>