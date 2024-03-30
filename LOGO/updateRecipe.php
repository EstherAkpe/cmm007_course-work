<?php

include('connection.php');
 $chefname=$_POST['chef_id'];
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
        $sql = "UPDATE recipemethod set chefid='$chefname',category='$category',Ingredients='$Ingredients',Directions='$Directions' where RecipeName='$RecipeName'";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Updated Successfully";
            header("Location: home.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: editRecipe.html");
        }
    }
   
?>