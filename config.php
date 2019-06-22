<?php
// a file to configure repetitive tasks like connecting to db
//create connection
$conn = mysqli_connect('localhost', 'root', '', 'Project_two');
// check if connection is successful
if(!$conn){
    echo "connection not successful:".mysqli_connect_error();
}else{
    echo "connection successful";
}
?>