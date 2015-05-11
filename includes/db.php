<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $db = new PDO("mysql:host=$servername;port=3306;dbname=tandp", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    function redirect_to($new_location){
        header("Location: " . $new_location);
        exit;
    }
?>;