<?php

$userId = $_POST['id'];

require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$query = "DELETE FROM users WHERE id = :id";
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $userId,
]);

header('Location: ../index.php');