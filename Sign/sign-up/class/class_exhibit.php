<?php
    require 'db-conn.php';
    if (!class_exists('Product')){
        class Product {
            // Create a new product
            public function createProduct($prodName, $price){
                $db = mysqli_connect('localhost', 'root', "", 'NMWV');
                $query = "INSERT INTO exhibits (prodName, price) VALUES ('$prodName', '$price')";
                $result = mysqli_query($db, $query);
            
                if (($result)) {
                    return true;
                } else {
                    return false;
                }
            }

            // Update a product
            public function updateProduct( $prodName, $price) {
                $db = mysqli_connect('localhost', 'root', "", 'NMWV');
                $query = "UPDATE exhibits SET price='$price' WHERE prodName='$prodName'";

                if (mysqli_query($db, $query)) {
                    return true; // Update successful
                } else {
                    echo mysqli_error($db);
                    return false; // Update failed
                }
            }

            // Delete a product
            public function deleteProduct($prodID) {
                $db = mysqli_connect('localhost', 'root', "", 'NMWV');
                $query = "DELETE FROM exhibits WHERE prodID = '$prodID'"; // Update the column name if necessary
                $result = mysqli_query($db, $query);
            
                if ($result) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }
?>