<?php
   session_start();
?>
<html>
   
   <head>
      <title>Welcome</title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $_SESSION['email']; ?></h1> 

   </body>
   
</html>
<?php

$message = "Login Successful!";
          echo "<script type='text/javascript'>alert('$message');</script>";

?>