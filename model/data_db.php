<?php
$username = 'dgp38';
$password = 'Daveshg21@';
$dsn = "mysql:host=sql1.njit.edu;dbname=$username";
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../error_page/database_db_error.php');
    exit();
}
?>
