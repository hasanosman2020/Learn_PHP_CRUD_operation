<?php
include ('connect.php');
if (isset($_GET['delete_id'])){
    $id = ($_GET['delete_id']);
    //echo $id;
    $sql_delete = "DELETE FROM crud_operation WHERE id=$id";
    $result = mysqli_query($connect,$sql_delete);
    if ($result){
        echo "<script>alert('Record deleted successfully.')</script>";
        echo "<script>window.open('display.php','_self')</script>";
} else {
die (mysqli_error($connect));
}
    } 
?>