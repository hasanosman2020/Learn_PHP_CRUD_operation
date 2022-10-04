<?php
include ('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body> 
    <div class="container my-5">
        <button class="btn btn-dark my-4 txt-decoration-none" type="button"><a href="index.php" class="text-light text-decoration-none">Add User</a></button>
    
    <table class="table mt-5 table-bordered vertical-align-middle">
        <thead>
            
            <tr>
            <th>IS Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Actions</th>
            </tr>
</thead>
<tbody class="vertical-align-middle text-center table-group-divider" style="border-top-color: black">
<?php
$select_query = "SELECT * FROM crud_operation";
$result = mysqli_query($connect,$select_query);
$i=1;
if ($result){
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        echo "<tr>
                <td>$i</td>
                <td>$name</td>
                <td>$email</td>
                <td>$mobile</td>
                <td>
                    <button class='btn btn-dark my-4 txt-decoration-none' type='button'><a href='update.php?update_id=$id' class='text-light text-decoration-none'>Update</a></button>
                    <button class='btn btn-danger my-4 txt-decoration-none' type='button'><a href='delete.php?delete_id=$id' class='text-light text-decoration-none'>Delete</a></button>
                </td>

            </tr>";
            $i++;
    }
    
} else {
    die (mysqli_error($connect));
}
?>
            
            </tbody>
        
    </table>
</div>
    
</body>
</html>