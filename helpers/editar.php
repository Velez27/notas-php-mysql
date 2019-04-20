<?php

$id = $_GET['id'];
$title = $_GET['title'];
$descripcion = $_GET['descripcion'];

include_once ('./conexion.php');

$sql_editar = 'UPDATE notas SET title = ?, descripcion = ? WHERE id= ? ';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($title, $descripcion, $id));

header('location:../index.php');