<?php
header('Content-Type: application/json');
include '../connection.php'; // ডাটাবেস কানেকশন ফাইল যুক্ত করুন

$query = "SELECT * FROM product"; // products টেবিল থেকে ডেটা নির্বাচন
$result = mysqli_query($conn, $query);

$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row; // প্রতিটি পণ্যকে array তে যোগ করুন
}

echo json_encode($products); // JSON আউটপুট
?>