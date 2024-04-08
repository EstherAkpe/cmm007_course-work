<?php
    include('../php files/connection.php'); // Include your database connection file

    // Query to fetch recipes from the database
    $query = "SELECT * FROM grouprecipe";
    $result = mysqli_query($db, $query);

    // Check if there are any recipes in the database
    if(mysqli_num_rows($result) > 0) {
        // Loop through each recipe and display them
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h3>{$row['individualrecipename']}</h3>";
            echo "<p>{$row['Recipe1']}</p>";
            echo "<p>{$row['Recipe2']}</p>";
            echo "<p>{$row['Recipe3']}</p>";
            echo "<hr>";
        }
    } else {
        // If no recipes are found in the database
        echo "No recipes found.";
    }
?>