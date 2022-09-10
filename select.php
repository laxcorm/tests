<?php
require('mysql.php');

$query = "SELECT COUNT(*) FROM tests";
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
if ($count < $id) {
    require('final.php');
}
$query = "SELECT*FROM tests WHERE id=" . $id;
echo $query;
$stmt = $db->prepare($query);
$stmt->execute();
$test = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
