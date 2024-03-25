<?php

include('connection.php');
 $Lastname=$_POST['lastname'];
 $Firstname=$_POST['firstname'];
 $Email=$_POST['email'];
 $Password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

    if($password !== $confirmpassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO blogusers (firstname,lastname,email,password) VALUES ('$Lastname','$Firstname','$Email','$Password')";
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