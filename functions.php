<?php include "db.php"; ?>
<?php
function create(){
    global $connection;
    if(isset($_POST['create'])){
     include "db.php";
     $emailid = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
     echo $mobile;?><br><?php
     
     $query = "INSERT INTO employees VALUES('','$name','$emailid','$password','$mobile')"; 
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query FAILED'. mysqli_error($connection));
    }
}

    
}


