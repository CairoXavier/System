<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col {
            flex: 1;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .my-1 {
            margin-top: 0.25rem;
            margin-bottom: 0.25rem;
        }

        .w-50 {
            width: 50%;
            margin: auto;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select.form-control {
            appearance: none;
            background-color: white;
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1.5em;
            padding-right: 3em;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
    <h1 class="text-center py-4 my-1">Sign-Up</h1>
    <div class="w-50 m-auto">
        <!-- change action -->
    <form action="sign-up.php" method="post" autocomplete="off"> 
        <div class="form-group">
            <label for="Fname">First Name</label>
            <input class="form-control" type="text" name="Fname" id="Fname" placeholder="Enter First Name" Required>
        </div>
        <div class="form-group">
            <label for="Lname">Last Name</label>
            <input class="form-control" type="text" name="Lname" id="Lname" placeholder="Enter Last Name" Required>
        </div>
        <div class="form-group">
            <label for="Username">Username</label>
            <input class="form-control" type="text" name="Username" id="Username" placeholder="Enter Username" Required>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Enter Password" Required>
        </div>
        <br>
        <button class="btn btn-primary">Sign Up</button><br><br>
        <a href="login-page.php" class="btn">Login</a> 
    </form>
    </div>
</body>
</html>