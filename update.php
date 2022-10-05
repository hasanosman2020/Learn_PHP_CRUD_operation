<?php
include ('connect.php');

if (isset($_GET['update_id'])){
    $uid = $_GET['update_id'];
    //echo $uid;
//selecting data from database so that we can display in input fields
$select_query="SELECT * FROM crud_operation WHERE id='$uid'";
$result_query =  mysqli_query($connect,$select_query);
$row=mysqli_fetch_assoc($result_query);
$user_display = $row['name'];
$email_display=$row['email'];
$mobile_display=$row['mobile'];


    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
//updating new data inside database table
        $update_query = "UPDATE crud_operation SET name='$name', email='$email',mobile='$mobile' WHERE id='$uid'";
        $result_query = mysqli_query($connect,$update_query);
        if($result_query){
            echo "<script>alert('Record updated successfully')</script>";
            echo "<script>window.open('display.php','_self')</script>";
        } else {
            die(mysqli_error($connect));
        }
    }}



?>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP CRUD operation - Update Database</title>
    <!--Bootstrap CSS -->
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <form action="" method="post">
            <!--username field-->
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" required="required" autocomplete="off" placeholder="Enter username" name="name" value="<?php echo $user_display ?>">
            </div>
            <!--email field-->
            
            <div class="form-group mb-3">
                <label for="name">Email</label>
                <input type="email" class="form-control" required="required" autocomplete="off" placeholder="Enter email address" name="email" value="<?php echo $email_display ?>">
            </div>
            
            
            <!--mobile number field-->
            
            <div class="form-group mb-3">
                <label for="name">Mobile</label>
                <input type="number" class="form-control" required="required" autocomplete="off" placeholder="Enter mobile number" minLength="11" maxLength="11" name="mobile" value="<?php echo $mobile_display ?>">
            </div>
            <button class="btn btn-dark" type="submit" name="update">Update</button>
</form>
    </div>
    
</body>
</html>