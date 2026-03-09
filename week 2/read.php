<?php

global $conn;
require_once 'db.php';

if (empty($_GET['author'])){
    $stmt = $conn->prepare("select * from mes");
    $stmt->execute();
} else {
    $stmt = $conn->prepare("select * from mes where author = ?");
    $stmt->execute([$_GET['author']]);
}
$result = $stmt;

$rijen = $result->fetchAll();

?>