<?php
session_start();
    $user_first_name = $_SESSION['user_first_name'];
    $user_last_name    =$_SESSION['user_last_name'];
    if(!empty($user_first_name) && !empty($user_last_name)){
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Store Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container bg-light"> <!--container start-->
        <div class="container-foulid border-bottom border-success"> <!--container-foulid-one---top-bar-start-->
            <div class="row p-3"> <!--main topbar row start--->
                <?php include('topbar.php') ?>
            </div><!--main topbar row end--->
        </div><!--container-foulid-one---top-bar-end-->
        <div class="container-foulid"> <!--container-foulid-two---top-bar-start-->
            <div class="row"> <!--start row--->
                <div class="col-sm-3 bg-light p-0 m-0"> 
                    <!--start left side code--->
                    <?php include('leftbar.php')?>
                </div> <!--end left side code--->
            <div class="col-sm-9 border-start border-success"> <!--start Right side code--->
                    <div class="row p-4"><!----start right side row one----->
                        <div class="col-sm-3">
                            <a href="add_category.php"><i class = "fas fa-folder-plus fa-7x text-success"></i></a>
                            <p>Add Category</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="list_of_category.php"><i class = "fas fa-folder-open fa-7x text-success"></i></a>
                        <p>Category List</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="add_product.php"><i class = "fas fa-laptop-medical fa-7x text-success"></i></a>
                        <p>Add Product</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="list_of_product.php"><i class = "fas fa-stream fa-7x text-success"></i></a>
                        <p>Product List</p>
                        </div>
                    </div><!----end right side row one ----->
                    <hr>
                    <div class="row p-4"><!----start right side row two----->
                        <div class="col-sm-3">
                            <a href="add_store_product.php"><i class = "fas fa-box fa-7x text-success"></i></a>
                            <p>Store Product</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="list_of_entry_product.php"><i class = "fas fa-rectangle-list fa-7x text-success"></i></a>
                        <p>Store Product List</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="add_spend_product.php"><i class = "fas fa-trash-restore fa-7x text-success"></i></a>
                        <p>Spend Product</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="list_of_spend_product.php"><i class = "fas fa-window-restore fa-7x text-success"></i></a>
                        <p>Spend Product List</p>
                        </div>
                    </div><!----end right side row two ----->
                    <hr>
                    <div class="row p-4"><!----start report side----->
                        <div class="col-sm-3">
                            <a href="report.php"><i class = "fas fa-square-poll-vertical fa-5x text-success"></i></a>
                            <p>Report</p>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div><!----end report side  ----->
                    <hr>
                    <div class="row p-4"><!----start report side----->
                        <div class="col-sm-3">
                            <a href="add_users.php"><i class = "fas fa-user-plus fa-5x text-success"></i></a>
                            <p>Add User</p>
                        </div>
                        <div class="col-sm-3">
                        <a href="list_of_users.php"><i class = "fas fa-user-group fa-5x text-success"></i></a>
                        <p>User List</p>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div><!----end report side  ----->
                    
            </div> <!--end Right side code--->
            </div> <!--end row--->
        </div> <!--container-foulid-two---top-bar-end-->
        <div class="container-foulid border-top border-success"> <!--container-foulid-three---bottom-bar-start-->
            <?php include('bottombar.php')?>
        </div> <!--container-foulid-two---bottom-bar-end-->

    </div> <!---end of container-->
</body>
</html>

<?php
    }else{
        header('location:login.php');
    }
?>