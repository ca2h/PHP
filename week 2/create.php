<?php

require_once "db.php";

$stmt = $conn->prepare("INSERT INTO mes (author , message) VALUE (?, ?)");

$author = $_POST['author'];
$message = $_POST['mes'];

$stmt->bindValue(1, $author);
$stmt->bindValue(2, $message);
$stmt->execute();

header("location: index.php");
