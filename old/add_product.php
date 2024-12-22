<?php
require('connection.php');



session_start();
    $user_first_name = $_SESSION['user_first_name'];
    $user_last_name    =$_SESSION['user_last_name'];

    if(!empty($user_first_name) && !empty($user_last_name)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
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
    if(isset($_GET['product_name'])){
        $product_name       = $_GET['product_name'];
        $product_category   = $_GET['product_category'];
        $product_code       = $_GET['product_code'];
        $product_entry_date = $_GET['product_entry_date'];

        $sql = "INSERT INTO product(product_name,product_category,product_code,product_entry_date)
        VALUES('$product_name','$product_category','$product_code','$product_entry_date')";

        if($conn->query($sql)===TRUE){
            echo "Data Inserted";
        }else{
            echo "Data Not Inserted";
        }
    }
    ?>
    <?php
    $sql = "SELECT * FROM category";
    $query = $conn->query($sql);
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        Product Name: <br>
        <input type="text" name="product_name"> <br><br>
        Product Category : <br>
        <select name="product_category" required>
        <option value="" disabled selected>Select a Category</option>;
            <?php
            while ($data = mysqli_fetch_array($query)){
            $category_id = $data['category_id'];
            $category_name = $data['category_name'];
            echo "<option value = '$category_id'>$category_name</option>";
            }
            ?>
        </select><br><br>
        Product Code: <br>
        <input type="text" name="product_code"> <br><br>
        Product Entry Date : <br>
        <input type="date" name= "product_entry_date"><br><br>

        <input type="submit" value="submit" class="btn btn-success">
    </form>

                
                    
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