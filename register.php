<?php 
require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form id="registerForm" action = "<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name = "fullName" required>
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Phone Numer</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="user_password" required>
                                <div class="invalid-feedback">Please enter a password.</div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name = "confirmPassword" required>
                                <div class="invalid-feedback">Passwords do not match.</div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>

                            <div class="mt-3 text-center">
                                <span>Already have an account?</span>
                                <a href="login.php">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


<?php
if(isset($_POST['email'])){

$fullName        = $_POST['fullName'];
$email           = $_POST['email'];
$user_password   = $_POST['user_password'];
$confirmPassword = $_POST['confirmPassword'] ;

if($user_password !== $confirmPassword){
    die("password not match!");
}

// this is the hashed password
// $hashed_password = password_hash($password,PASSWORD_DEFAULT);
// $sql = "INSERT INTO users(fullName,email, password) VALUES('$fullName','$email',$hashed_password')";

$sql = "INSERT INTO users(fullName,email, user_password) VALUES('$fullName','$email','$user_password')";
 if($conn->query($sql) === TRUE){
    header('location:index.php');
}else{
    die("Error: ".$conn->error);
}

}

?>