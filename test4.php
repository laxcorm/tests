<?php

require('mysql.php');
$id = $_GET['id'];
$query = 'DELETE FROM numbers WHERE id=:id; UPDATE tests SET id = id -1 WHERE id >'. $id;

$stmt = $db -> prepare($query);
$stmt -> execute([':id' => $id]);

// $query = 'UPDATE tests SET id = id -1 WHERE id >'. $id;