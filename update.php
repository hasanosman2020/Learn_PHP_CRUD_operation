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
            
            
            <!--mobile number field-->
            
            <div class="form-group mb-3">
                <label for="name">Mobile</label>
                <input type="number" class="form-control" required="required" autocomplete="off" placeholder="Enter mobile number" minLength="11" maxLength="11" name="mobile">
            </div>
            <button class="btn btn-dark" type="submit" name="submit">Update</button>
</form>
    </div>
    
</body>
</html>