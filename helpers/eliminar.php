<?php

$id = $_GET['id'];

include_once ('./conexion.php');

$sql_eliminar = 'DELETE FROM notas WHERE id= ?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));

header('location:../index.php');