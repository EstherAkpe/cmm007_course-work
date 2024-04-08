<?php

include('connection.php');
  $Username=$_POST['username'];
  $Password=$_POST['password'];
  $Firstname=$_POST['firstname'];
 $Lastname=$_POST['lastname'];
 $Email=$_POST['email'];
 

//$confirmPassword = $_POST['confirmPassword'];

    //if($password !== $confirmPassword)
   //{
    //echo "password and confirm password are not same";
    //}
       
   // else
    {  
        
        $sql = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('$username','$Password','$Lastname','$Firstname','$Email')";
        $result = mysqli_query($db, $sql);

       if($result)
        {
            echo "Registered Successfully";
            header("Location: login.html");
            
       }
        else
        {
            echo "Something Went Wrong!";
            header("Location: register.html");
            
        }
    }

  
?>

