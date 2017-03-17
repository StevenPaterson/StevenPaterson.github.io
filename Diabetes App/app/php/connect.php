<?php
    $servername = "localhost";
    $username = "root";     // Use your database username... same as phpmyadmin
    $password = "root";     // Use the password for your database username... same as phpmyadmin
    $dbname = "diabetes";  // Use the name of the database you created... same as phpmyadmin

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        header( "Location:db-connection-failed.php" );
    }  
?>
