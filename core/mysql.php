<?php
define('DB_NAME', 'shop');
define('DB_USER', 'root');
define('DB_USER_PASS', '');

function get_pdo(){
    $conn = null;
    try{
        $conn = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_USER_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //insert user
        //insert _user($conn)

        //update user
        //update_user($conn)

        //delete user
        //delete_user($coon)

        //select user
        return $conn;
    }
    catch (PDOException $e){
        echo "Connection failed: ". $e->getMessage();
    }

    return $conn;   
}
?>
