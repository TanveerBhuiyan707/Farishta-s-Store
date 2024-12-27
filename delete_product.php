<?php
require('connection.php');

if(isset($_GET['id'])){
    $product_id = intval($_GET['id']);

    // delete sql query
    $sql = "DELETE FROM product WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$product_id);

    if($stmt->execute()){
        header("Location: list_of_product.php?message=Product delete successfully");
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