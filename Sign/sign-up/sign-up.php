<?php
try {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    require './class/class_user.php';

    $class = new Staff();
    $result = $class->signUp($Fname, $Lname, $Username, $Password);
    if ($result == "Successful") {
        header("location: login-page.php");
    } else {
        $errorMessage = "Invalid Username or Password";
    }
} 
    catch (Exception $e) {
    echo "Error Message: " . $e->getMessage() . "<br>";
    echo "Stack Trace: " . $e->getTraceAsString();
}
?>
