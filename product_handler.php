<?php
if(isset( $_POST['btn_submit'])){
    //add form validation
    $name = $_POST['shoename'];
    $size = $_POST['shoesize'];
    $price = $_POST['shoeprice'];

    // use include if you don't want to halt the execution of the
    // file but return an error if the file to be included does not exist.
    // use require if the file execution should stop if the required file does not exist.
    include 'config.php';// created and checked the connection
    $sql = "INSERT INTO `product`(`id`, `Name`, `Size`, `Price`) VALUES ('null','$name' ,' $size','$price')";
    //try and save data to db
    if(mysqli_query($conn, $sql)){
        // if successful
        echo "data saved successfully";
        header('location:index.php');
    }else{
        echo 'saving data unsuccessful'.mysqli_error($conn);
    }
}
?>