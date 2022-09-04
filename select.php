<?php
require('mysql.php');

$query = 'SELECT*FROM tests WHERE id=' . $id;
$stmt = $db->prepare($query);
$stmt->execute();
$test = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
