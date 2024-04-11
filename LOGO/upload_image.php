<?php
    include('../LOGO/connection.php'); // Include your database connection file

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $upload_directory = 'test_upload/';

        if(move_uploaded_file($file_tmp, $upload_directory.$file_name)) {
            // File uploaded successfully, proceed with database insertion
            $query = "INSERT INTO grouprecipe (image_name) VALUES ('$file_name')";
            if(mysqli_query($db, $query)) {
                echo "Image uploaded and database updated successfully.";
            } else {
                echo "Error: " . mysqli_error($db);
            }
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Error uploading file: " . $_FILES['image']['error'];
    }
?>
