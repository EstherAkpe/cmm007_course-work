<?php

include('connection.php');
 $chef_id=$_POST['chef_id'];
 $category=$_POST['category'];
 $RecipeName=$_POST['RecipeName'];
 $Ingredients=$_POST['Ingredients'];
 $Directions=$_POST['Directions'];

    if(empty($_POST["chef_id"]) || empty($_POST["category"]) || empty($_POST["RecipeName"]) || empty($_POST["Ingredients"]) || empty($_POST["Directions"]))
    {
        echo "All fields are required.";
    }
       
    else
    {   
        $sql = "INSERT INTO recipemethod (chef_id,category,RecipeName,Ingredients,Directions) VALUES ('$chef_id','$category','$RecipeName','$Ingredients','$Directions')";
        $result = mysqli_query($db, $sql);

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