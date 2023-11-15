<?php

include "../Model/database.php";
        $connection=new db();
        $conobj=$connection->OpenCon();

        $showall=$connection->ShowAll($conobj,"review");

    
//name Comment email Date
           if ($showall->num_rows > 0)
 {
    echo "<table border=3><tr><th>User_Name</th><th>Comment</th><th>Email</th><th>Date</th></tr>";
    while($row = $showall->fetch_assoc()) 
    {
      echo "<tr><td>".$row["name"]."</td><td>".$row["Comment"]."</td><td>".$row["email"]."</td><td>".$row["Date"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No data Found";
  }
$connection->CloseCon($conobj);
$error="submitted" ;
    

    ?>