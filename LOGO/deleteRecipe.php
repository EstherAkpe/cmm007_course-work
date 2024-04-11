<?php
include('connection.php');

$Grouprecipename = $_POST['rouprecipename'];

$sql = "DELETE FROM grouprecipe WHERE rouprecipename like'%$grouprecipename%'";
$result = $db->query($sql);

if ($result) {
    echo "Recipe '$rouprecipename' successfully deleted.";
} else {
    echo "Error deleting recipe: " . $db->error;
}

$db->close();
?>
