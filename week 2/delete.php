<?php

require_once "db.php";
$stmt = $conn->prepare("DELETE FROM mes WHERE `mes`.`id` = ?");
$stmt->execute([$_GET['id']]);
$stmt->execute();



header("location: index.php");
?>