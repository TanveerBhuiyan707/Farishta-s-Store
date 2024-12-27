<?php
require('connection.php');

if(isset($_GET['id'])){
    $category_id = intval($_GET['id']);

    // delete sql query
    $sql = "DELETE FROM category WHERE category_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$category_id);

    if($stmt->execute()){
        header("Location: list_of_category.php?message=Category delete successfully");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}else{
    echo "Invalid request!";
}
?>