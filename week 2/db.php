<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messages_db";


try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "Connected";
} catch (PDOException $ex) {
    echo "jij ben een karel anker sukkel";
}

// $sql = "select * from mes where author = ?";
// $stmt = $conn->prepare($sql);

?>