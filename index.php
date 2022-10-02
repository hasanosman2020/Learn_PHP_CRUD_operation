<?php
include ('connect.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT); 



    $sql = "SELECT * FROM crud_operation WHERE name='$name' OR email='$email'";
    $sqlresult = mysqli_query($connect,$sql);
    $number = mysqli_num_rows($sqlresult);
    if($number > 0){
        echo "<scrip;>alert('Username and/or email already exist. Please choose different values.')</script>";
    } else {

    $sql = "INSERT INTO crud_operation (name,email,password,mobile) VALUES ('$name', '$email', '$password_hash', '$mobile')";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "<script>alert('Data inserted successfully.')</script>";
        echo "<script>window.open('display.php', '_self')</script>";
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
    <title>Learn PHP CRUD operation</title>
    <!--Bootstrap CSS -->
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <form action="index.php" method="post">
            <!--username field-->
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" required="required" autocomplete="off" placeholder="Enter username" name="name">
            </div>
            <!--email field-->
            
            <div class="form-group mb-3">
                <label for="name">Email</label>
                <input type="email" class="form-control" required="required" autocomplete="off" placeholder="Enter email address" name="email">
            </div>
            
            <!--password field-->
            
            <div class="form-group mb-3">
                <label for="name">Password</label>
                <input type="password" class="form-control" required="required" autocomplete="off" placeholder="Enter password" name="password">
            </div>
            <!--mobile number field-->
            
            <div class="form-group mb-3">
                <label for="name">Mobile</label>
                <input type="number" class="form-control" required="required" autocomplete="off" placeholder="Enter mobile number" minLength="11" maxLength="11" name="mobile">
            </div>
            <button class="btn btn-dark" type="submit" name="submit">Save Details</button>
</form>
    </div>
    
</body>
</html>