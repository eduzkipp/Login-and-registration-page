<?php
session_start();



?>
<html>
<head>
    <title>
    
    Home page
    
    </title>
    
    </head>
    <body>
    <a href="logout.php"> Logout</a>
    <h1> welcome <?php echo $_SESSION['username'];?></h1>
    
    </body>

</html>