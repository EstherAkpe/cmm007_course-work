<?php

include('connection.php');
 $Lastname=$_POST['lastname'];
 $Firstname=$_POST['firstname'];
 $Email=$_POST['email'];
 $Password=$_POST['password'];
 $Username=$_POST['username'];
 $confirmPassword=$_POST['confirmPassword'];

    //if($password !== $confirmPassword)
    //{
     // echo "password and confirm password are not same";
    //}
       
    //else
    {   
        $sql = "INSERT INTO users (username,firstname,lastname,email,password) VALUES ('$username','$Lastname','$Firstname','$Email','$Password')";
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