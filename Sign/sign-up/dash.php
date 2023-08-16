<?php   
    include 'db-conn.php';

    session_start();

    if(!isset($_SESSION[''])){
        header('localtion:login-page.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>

    <div class="container">

        <div class="content">
            <h3>Hi, <span>User</span></h3>
            <h1>Welcome </h1>
            <p>This is Welcome page</p>
            <a href="login-page.php" class="btn">Login another account</a>
            <br>
            <a href="index.php" class="btn">Sign-Up another account</a>
            <br>
            <a href="logout.php" class="btn">Logout</a>
        </div>
        
    </div>
    
</body>
</html>