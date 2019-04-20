<?php

$sql = 'mysql:host=localhost;dbname=notas-php-mysql';
$user = 'username';
$password = 'password';

try {

    $pdo = new PDO($sql, $user, $password);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}