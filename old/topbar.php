<?php
// session_start(); // Always start the session at the beginning
if (!isset($_SESSION['user_first_name']) || !isset($_SESSION['user_last_name'])) {
    // Redirect to login page if session values are not set
    header('Location: login.php');
    exit();
}

$user_first_name = $_SESSION['user_first_name'];
$user_last_name = $_SESSION['user_last_name'];
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

    <div class="col-sm-9">
                    <h1><a href="index.php" class = "text-decoration-none text-success">Store Management System</a></h1>
                </div>
                <div class="col-sm-3">
                <p class ="pt-3"><?php echo $user_first_name . ' ' . $user_last_name ?>
                    <a href="logout.php" class ="text-white text-decoration-none btn btn-success py-1 m-0">
                     Logout
                    </a>
                </p>
                </div>
                
                
                
