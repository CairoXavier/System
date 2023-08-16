<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    require './class/class_user.php';

    $db = mysqli_connect('localhost', 'root', '', 'NMWV');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $staff = new Staffs();

    $userData = $staff->logIn($db, $Username, $Password);

    if ($userData) {
        // Successful login
        // Redirect the user to the dashboard
        header("Location: dash.php");
        exit(); // Make sure to exit after sending the redirect header
    } else {
        // Failed login
        // You can display an error message or redirect the user to a login error page
        echo "Login failed. Please check your credentials.";
    }

    mysqli_close($db);
}
?>
