<?php
// session_start();
// $user_first_name = $_SESSION['user_first_name'];
// $user_last_name    =$_SESSION['user_last_name'];
// if(!empty($user_first_name) && !empty($user_last_name)){


function data_list($tablename,$column1,$column2){
    require('connection.php');
    $sql = "SELECT * FROM $tablename";
        $query = $conn->query($sql);

    while ($data = mysqli_fetch_array($query)){
        $data_id = $data[$column1];
        $data_name = $data[$column2];

        echo "<option value = '$data_id'>$data_name</option>";
    }
}
?>

<?php
    // }else{
    //     header('location:login.php');
    // }
?>