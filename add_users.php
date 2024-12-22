<?php
require('connection.php');
session_start();
$user_first_name = $_SESSION['user_first_name'];
$user_last_name = $_SESSION['user_last_name'];
if(!empty($user_first_name)&& !empty($user_last_name)){
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Add Users</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  
<?php
    if(isset($_POST['user_first_name'])){
        $user_first_name  = $_POST['user_first_name'];
        $user_last_name   = $_POST['user_last_name'];
        $user_email       = $_POST['user_email'];
        $user_password    = $_POST['user_password'];

        $sql = "INSERT INTO users(user_first_name,user_last_name,user_email,user_password)
        VALUES('$user_first_name','$user_last_name','$user_email','$user_password')";

        if($conn->query($sql)===TRUE){
            echo "Data Inserted";
            header('location: list_of_users.php');
        }else{
            echo "Data Not Inserted";
        }
    }
    ?>
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Add User</h1>
                  </div>
                  <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" required>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp"
                        placeholder="Enter First Name" name="user_first_name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="emailHelp"
                        placeholder="Enter Last Name" name="user_last_name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address" name="user_email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="user_password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                       <a href="index.php" class = "text-decoration-none"> <input type="submit" value = "submit" class="btn btn-primary btn-block"></a>
                      
                    </div>
                    
                    
                  </form>
                 
                  
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>
<?php
}else{
  header('location:login.php');
}
?>