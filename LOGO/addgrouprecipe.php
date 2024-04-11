<?php
include('connection.php');

$chefname = $_POST['chefname'];
$recipename = $_POST['recipename'];
$recipe1 = $_POST['recipe1'];
$recipe2 = $_POST['recipe2'];

// Check if file is uploaded successfully
if(isset($_FILES['image_name']) && $_FILES['image_name']['error'] === UPLOAD_ERR_OK) {
    // Get file details
    $file_name = $_FILES['image_name']['name'];
    $file_tmp = $_FILES['image_name']['tmp_name'];

    // Move uploaded file to desired directory
    $upload_directory = 'test_upload/';
    if(move_uploaded_file($file_tmp, $upload_directory . $file_name)) {
        // File uploaded successfully, proceed with database insertion
        $sql = "INSERT INTO grouprecipe (chefname, recipename, recipe1, recipe2, image_name) VALUES ('$chefname', '$recipename', '$recipe1', '$recipe2', '$file_name')";
        $result = mysqli_query($db, $sql);

        if($result) {
            echo "Successfully";
            header("Location: home.html");
            exit(); // Terminate script after redirection
        } else {
            echo "Error: " . mysqli_error($db);
        }
    } else {
        echo "Failed to move uploaded file.";
    }
} else {
    echo "Error uploading file: " . $_FILES['image_name']['error'];
}
?>
