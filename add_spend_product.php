<?php
require('connection.php');
require('myFunction.php');
session_start();

  $user_first_name = $_SESSION['user_first_name'];
  $user_last_name    =$_SESSION['user_last_name'];

  if(!empty($user_first_name) && !empty($user_last_name)){
?>

<?php
if(isset($_GET['spend_product_name'])){
  $spend_product_name       = $_GET['spend_product_name'];
  $spend_product_quentity   = $_GET['spend_product_quentity'];
  $spend_product_entry_date   = $_GET['spend_product_entry_date'];

  $sql = "INSERT INTO spend_product(
  spend_product_name,spend_product_quentity,spend_product_entry_date)
  VALUES('$spend_product_name','$spend_product_quentity','$spend_product_entry_date')";



  if($conn->query($sql)===TRUE){
    echo "Data Inserted";
    header('location:list_of_spend_product.php');
  }else{
    echo "Data Not Inserted";
  }
}

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
  <title>Add Spend Product</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!--start Sidebar -->
      <?php include  ('sidebar.php');?>
    <!--end  Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!--start TopBar -->
        <?php include  ('topbar.php');?>
        <!--end Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
             <!-- Product List -->
             <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Spend Product</h6>
                </div>
                  <!-- product list form  -->
                  <div class="card-body">
                  <form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <div class="form-group">
                      <label for="exampleInputProduct">Product Name</label><br>
                      <select name="spend_product_name" >
                        <?php
                            data_list('product','product_id','product_name');
                        ?>
                      </select><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputQuentity">Product Quentity</label>
                      <input type="text" name="spend_product_quentity"  class="form-control" id="exampleInputQuentity" aria-describedby="emailHelp"
                        placeholder="Enter Product Quentity">
                    </div>
                    <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Spend Entry Date :</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="date" name = "spend_product_entry_date" class="form-control"  id="simpleDataInput">
                        </div>
                    </div>
                    <button type="submit" value = "submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://www.facebook.com/Tanveer.7077/" target="_blank">Tanveer bhuiyan</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>
</html>
<?php
    }else{
      header('location:login.php');
  }
?>