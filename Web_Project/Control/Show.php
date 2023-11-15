<?php
/* session_start(); 
if(empty($_SESSION[""])) 
{
header("Location: ../view/Admin.php");
} */
include "../Model/database.php";
        $connection=new db();
        $conobj=$connection->OpenCon();

        $showall=$connection->ShowAll($conobj,"user");


        if ($showall->num_rows > 0) {
      /*   if ($showall->num_rows > 0) {
>>>>>>> 4b866cf (riyad_Md)
        
            while($row = $showall->fetch_assoc()) {

                  $name= $row['name'];
                  $username=$row['username'];
                  $email=$row['email']; 
                  $password=$row['password'];
             
                
            
              echo "  Email : ".$name."<br>";
              echo " Password : ".$username."<br>";
              echo "first name: ".$email."<br>";
              echo " last name : ".$password."<br>";
            

<<<<<<< HEAD
           }
    }
=======
           } */

           if ($showall->num_rows > 0)
 {
    echo "<table border=5><tr><th>Name</th><th>User Name</th><th>Email</th><th>Password</th></tr>";
    while($row = $showall->fetch_assoc()) 
    {
      echo "<tr><td>".$row["name"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No data Found";
  }
$connection->CloseCon($conobj);
$error="submitted" ;
    

        }

    ?>