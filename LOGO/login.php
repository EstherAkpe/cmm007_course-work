
<?php
    include("connection.php"); // Establishing connection with our database
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        echo "Both Fields Required";
        //Debugging: Uncomment the following lines to check the values
       // echo "username: ". $_POST["username"] . "<br>";
        //echo "Password: " . $_POST["password"] . "<br>";
    } 
    else {
        $username = $_POST['username'];
        $password = $_POST['password']; // Corrected from 'email' to 'password'
        
        // $hashed_password = md5($password); // Assuming your passwords are hashed with MD5; use appropriate hashing method

        $sql = "SELECT username FROM users WHERE username='$username' and password='$password'";


       // $sql = "SELECT email FROM users WHERE email='$email' and password='$password'";
        $result = mysqli_query($db, $sql);
        if(mysqli_num_rows($result) == 1) {
            header("Location: home.html"); 
        } else {
            echo "Incorrect username or password";
        }
    }
?>


