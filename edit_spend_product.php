<?php
require('connection.php');
require('myFunction.php');

// session_start();

// $user_first_name = $_SESSION['user_first_name'];
// $user_last_name = $_SESSION['user_last_name'];
// if(!empty($user_first_name)&& !empty($user_last_name)){
?>
<?php $date = date('d/m/y'); ?>
<?php
    if(isset($_GET['id'])){
        $GETId = $_GET['id'];

        $sql = "SELECT * FROM spend_product WHERE spend_product_id = $GETId";
        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);

        $spend_product_id         =  $data['spend_product_id'];
        $spend_product_name       =  $data['spend_product_name'];
        $spend_product_quentity   =  $data['spend_product_quentity'];
        $spend_product_entry_date =  $data['spend_product_entry_date'];
    }

    if(isset($_GET['spend_product_name'])){
        $new_spend_product_name       = $_GET['spend_product_name'];
        $new_spend_product_quentity   = $_GET['spend_product_quentity'];
        $new_spend_product_entry_date = $_GET['spend_product_entry_date'];
        $new_spend_product_id         = $_GET['spend_product_id'];

        $sql1 = "UPDATE spend_product SET
                spend_product_name ='$new_spend_product_name',
                spend_product_quentity = '$new_spend_product_quentity',
                spend_product_entry_date = '$new_spend_product_entry_date'
                WHERE spend_product_id = $new_spend_product_id";
        
        if($conn->query($sql1)==TRUE){
            echo 'Update Successful';
            header('location:list_of_spend_product.php');
        }else{
            echo "Error updating record: " . $conn->error;
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
  <title>Edit Spend Product </title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <!-- Select2 -->
   <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <?php include  ('sidebar.php');?>
    <!-- Sidebar -->
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
             <!-- Edit Category -->
             <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
                </div>
                <div class="card-body">
                  <form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <div class="form-group">
                      <label for="exampleInputProduct">Product Name</label><br>
                      <select name="spend_product_name">
                        <?php
                            $sql = "SELECT * FROM product";
                            $query = $conn->query($sql);

                            while($data = mysqli_fetch_array($query)){
                                $data_id = $data['product_id'];
                                $data_name = $data['product_name'];
                        ?>
                        <option value="<?php echo $data_id ?>"<?php if(isset($spend_product_name) && $spend_product_name == $data_id){echo 'selected';}?>>
                            <?php echo $data_name ?>
                        </option>
                        <?php } ?>
                      </select><br>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputProduct">Product Quentity</label>
                      <input type="text" name="spend_product_quentity" value='<?php echo isset($spend_product_quentity) ? $spend_product_quentity : ''; ?>' class="form-control" id="exampleInputProduct" aria-describedby="emailHelp"><br>
                    </div>
    
                    <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Edit Entry Date</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" name = "spend_product_entry_date" value="<?php echo isset($spend_product_entry_date) ? $spend_product_entry_date : ''; ?>" class="form-control" id="simpleDataInput"><br>
                        </div>
                    </div>
                    <input type="text" name="spend_product_id" value="<?php echo $spend_product_id ?>" hidden>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
            <span>copyright &copy; <script> document.write(new Date().GETFullYear()); </script> - developed by
              <b><a href="https://www.facebook.com/Tanveer.7077/" tarGET="_blank">Tanveer bhuiyan</a></b>
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
  <!-- Select2 -->
  <script src="vendor/select2/dist/js/select2.min.js"></script>
 <!-- Bootstrap Datepicker -->
 <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
 <script>
    $(document).ready(function () {

      $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });      

      // Select2 Multiple
      $('.select2-multiple').select2();

      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });

      $('#simple-date2 .input-group.date').datepicker({
        startView: 1,
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date3 .input-group.date').datepicker({
        startView: 2,
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date4 .input-daterange').datepicker({        
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });    

      // TouchSpin

      $('#touchSpin1').TouchSpin({
        min: 0,
        max: 100,                
        boostat: 5,
        maxboostedstep: 10,        
        initval: 0
      });

      $('#touchSpin2').TouchSpin({
        min:0,
        max: 100,
        decimals: 2,
        step: 0.1,
        GETfix: '%',
        initval: 0,
        boostat: 5,
        maxboostedstep: 10
      });

      $('#touchSpin3').TouchSpin({
        min: 0,
        max: 100,
        initval: 0,
        boostat: 5,
        maxboostedstep: 10,
        verticalbuttons: true,
      });

      $('#clockPicker1').clockpicker({
        donetext: 'Done'
      });

      $('#clockPicker2').clockpicker({
        autoclose: true
      });

      let input = $('#clockPicker3').clockpicker({
        autoclose: true,
        'default': 'now',
        placement: 'top',
        align: 'left',
      });

      $('#check-minutes').click(function(e){        
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
      });

    });
  </script>
</body>
</html>
<?php
    // }else{
    //     header('location:login.php');
    // }
?>
