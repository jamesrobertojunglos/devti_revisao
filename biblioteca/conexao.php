<?php
$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=aula', $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PODException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>