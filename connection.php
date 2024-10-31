<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "myss";  
    $con = new mysqli($servername, $username, $password, $db_name);
    if(!$con){
   
        die(mysqli_error($con));
    }
    
    
    ?>