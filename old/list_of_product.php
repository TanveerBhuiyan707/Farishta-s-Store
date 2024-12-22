<?php
    require('connection.php');

    session_start();
    $user_first_name = $_SESSION['user_first_name'];
    $user_last_name    =$_SESSION['user_last_name'];
    if(!empty($user_first_name) && !empty($user_last_name)){
    $sql1 = "SELECT * FROM category";
    $query1 = $conn->query($sql1);

    $data_list = array();

    while($data1 = mysqli_fetch_assoc($query1)){
        $category_id = $data1['category_id'];
        $category_name = $data1['category_name'];

        $data_list[$category_id] = $category_name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Of Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.jpg">
</head>
<body>
    <!-- start style fram  -->
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
                <div class="container">
                <?php
       $sql = "SELECT * FROM product";
       $query = $conn->query($sql);
       echo "<table class='table table-success table-hover my-4'>
       <tr>
       <th>Product Name</th>
       <th>Product Category</th>
       <th>Code</th>
       <th>Action</th>
       </tr>";
       while($data = mysqli_fetch_assoc($query)){
            $product_id =$data['product_id'];
            $product_name = $data['product_name'];
            $product_category = $data['product_category'];
            $product_code = $data['product_code'];

            echo "<tr>
                    <td>$product_name </td>
                    <td>$data_list[$product_category]</td>
                    <td>$product_code</td>
                    <td>
                    <a href = 'edit_product.php?id=$product_id' class='btn btn-success'>Edit</a>
                    <a href = 'edit_product.php?id=$product_id' class='btn btn-danger'>Delete</a>
                    </td>
                </tr>";
       }
       echo "</table>";
    
    ?>
                    
            </div> <!--end Right side code--->
            </div> <!--end row--->
        </div> <!--container-foulid-two---top-bar-end-->
        <div class="container-foulid border-top border-success"> <!--container-foulid-three---bottom-bar-start-->
            <?php include('bottombar.php')?>
        </div> <!--container-foulid-two---bottom-bar-end-->

    </div> <!---end of container-->
<!-- end style frame -->
                </div>
    
</body>
</html>

<?php
    }else{
        header('location:login.php');
    }
?>