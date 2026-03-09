<?php

require_once "db.php";

$stmt = $conn->prepare("UPDATE mes SET message = ? WHERE id = ?");
$stmt->execute([$_POST['message'], $_POST['id']]);

header("location: index.php");

?>