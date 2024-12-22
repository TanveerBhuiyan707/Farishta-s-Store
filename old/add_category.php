
<?php
session_start();
 $user_first_name = $_SESSION['user_first_name'];
 $user_last_name    =$_SESSION['user_last_name'];

 if(!empty($user_first_name) && !empty($user_last_name)){
?>
<?php // ai page run kora jacche na
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "storems";

  $conn =   new mysqli($hostName,$userName,$password,$dbName);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Category</title>
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
                        if(isset($_GET['category_name'])){

                            $category_name=         $_GET['category_name'];
                            $category_entryDate=    $_GET['category_entryDate'];

                                $sql = "INSERT INTO category(category_name,category_entryDate)
                                        VALUES('$category_name','$category_entryDate')";

                                if ($conn->query($sql)===TRUE){
                                    echo "Data Inserted";
                                }else{
                                    echo "Data Not Inserted";
                                }
                        }
                ?>

                <form action="add_category.php" method="GET">
                    Category : <br>
                    <input type="text" name="category_name"> <br><br>
                    Category Entry Date : <br>
                    <input type="date" name= "category_entryDate"><br><br>
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