<?php

include('connection.php');
 $chefname=$_POST['chefname'];
 $recipename=$_POST['recipename'];
 $recipe1=$_POST['recipe1'];
 $recipe2=$_POST['recipe2'];
 $image_name=$_POST['image_name'];

    if(empty($_POST["chefname"]) || empty($_POST["recipename"]) || empty($_POST["recipe1"]) || empty($_POST["recipe2"]) || empty($_POST["image_name"]))
    {
        echo "All fields are required.";
    }
       
    else
    {   
        $sql = "INSERT INTO grouprecipe (chefname,recipename,recipe1,recipe2,image_name) VALUES ('$chefname','$recipename','$recipe1','$recipe2','$image_name')";
        $result = mysqli_query($db, $sql);

        $db_host='localhost';
        $db_user='root';
        $db_password='';
        $db_name='estacyrice';



        if($result)
        {
            echo "Successfully";
            header("Location: home.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: addRecipe.html");
        }
    }
   
?>