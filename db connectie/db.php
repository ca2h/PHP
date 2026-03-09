<?php


$servername = "localhost";
$dbname = "messages_db";
$username = "root";
$password = "";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", $password);
    echo "database connected <br>";
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

$sql ="Select * from messages";
$result = $conn->query($sql);
// var_dump($result);
$messages = $result->fetchAll();
foreach($messages as $message){
    echo 'message id is: ' , $message['id'];
    echo "<br>";
    echo 'message author is: ' , $message['author'];
    echo "<br>";
    echo 'message message is: ' , $message['message'];
    echo "<br>";
    echo "<br>";
}


?>