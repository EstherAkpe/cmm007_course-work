<?php
    include('../LOGO/connection.php'); // Include your database connection file

    // Query to fetch recipes from the database
    $query = "SELECT * FROM recipemethod";
    $result = mysqli_query($db, $query);

    // Check if there are any recipes in the database
    if(mysqli_num_rows($result) > 0) {
        // Loop through each recipe and display them
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h3>{$row['chefname']}</h3>";
            echo "<img src='test_upload/{$row['image_name']}'  alt='Recipe Image'style='max-width: 150px; max-height: 200px;'>";
            echo "<p>{$row['category']}</p>";
            echo "<p>{$row['recipename']}</p>";
            echo "<p>{$row['ingredients']}</p>";
            echo "<p>{$row['directions']}</p>";
             echo "<hr>";
        }
    } else {
        // If no recipes are found in the database
        echo "No recipes found.";
    }
?>