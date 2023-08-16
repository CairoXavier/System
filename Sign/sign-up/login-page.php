<?php
   require 'db-conn.php';
   require './class/class_user.php';
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $Username = $_POST['Username'];
       $Password = $_POST['Password'];
   
       $class = new Staff();
       $result = $class->LogIn($db, $Username, $Password);
   
       if ($result == "Successful") {
           header("location: dash.php");
       } else {
           $errorMessage = "Invalid email or password";
       }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
    <!-- Login form -->
    <h1 class="text-center py-4 my-1">Login</h1>
    <div class="w-50 m-auto">
        <!-- change action -->
    <form action="login.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="Username" id="Username" placeholder="Enter Username" Required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Enter Password" Required>
        </div><br>
       <button class="btn btn-primary">Login</button><br><br>
    </form>
    </div>
</body>
<?php
        if (!empty($errorMessage)) {
            echo '<div class="alert alert-danger">' . $errorMessage . '</div>';
        }
        ?>