   <?php
    $connection = mysqli_connect('localhost','root','','attendance_register');
    if(!$connection){
        die("Database connection failed");
    }
?>