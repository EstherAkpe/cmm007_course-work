
<?php
include("connection.php"); //Establishing connection with our database
    if(empty($_POST["email"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }
    else
    {
        $Email=$_POST['email'];
        $Password=$_POST['password'];

        $sql="SELECT fname FROM blogusers WHERE email='$Email' and password='$Password'";
        $result=mysqli_query($db,$sql);

         if(mysqli_num_rows($result) == 1)
        {
            header("location: home.html"); // Redirecting To another Page
        }
        else
        {
            echo "Incorrect username or password.";
            echo $email;
            echo $password;
        }
    }
?>