<?php 
    $conn = mysqli_connect("localhost","root","","prodental");
    if(!$conn){
        echo mysqli_connect_error();
    }
?>