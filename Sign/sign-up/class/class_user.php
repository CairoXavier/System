<?php
    require 'db-conn.php';

    if (!class_exists('Staff')) {
        class Staff {
            public function signUp($Fname, $Lname, $Username, $Password) {
                $db = mysqli_connect('localhost', 'root', '', 'NMWV');
                $query = "INSERT INTO staff(Fname, Lname, Username, Password) 
                        VALUES('$Fname', '$Lname', '$Username', '$Password')";
                $result = mysqli_query($db, $query);

                if (($result)) {
                    echo "Staff Added";
                    return $db;
                } else {
                    echo mysqli_error($db);
                }
            }
        }
    }

    if (!class_exists('Staffs')) {
        class Staffs {
            public function logIn($db, $Username, $Password) {
                $db = mysqli_connect('localhost', 'root', '', 'NMWV');
                $query = "SELECT * FROM staff WHERE Username = '$Username' AND Password = '$Password'";
                $result = mysqli_query($db, $query);

            if ($result && mysqli_num_rows($result) == 1) {
                $userData = mysqli_fetch_assoc($result);
                mysqli_free_result($result);
                mysqli_close($db);
                return $userData;
            } else {
                mysqli_close($db);
                return false;
            }
        }
    }
    }
?>