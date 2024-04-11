<?php
include('connection.php');

$recipename = $_POST['recipename'];

$sql = "DELETE FROM grouprecipe WHERE recipename like'%$recipename%'";
$result = $db->query($sql);

if ($result) {
    echo "Recipe '$recipename' successfully deleted.";
} else {
    echo "Error deleting recipe: " . $db->error;
}

$db->close();
?>
