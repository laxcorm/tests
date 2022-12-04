<?php
require('mysql.php');
$id = $_GET['id'];
$query = 'DELETE FROM tests WHERE id=:id';
$stmt = $db -> prepare($query);
$stmt -> execute([':id' => $id]);

header("Location: http://".$_SERVER['HTTP_HOST']."/fillin.php");