<?php

/* if(!isset($_SESSION['count']) || $_SERVER['REQUEST_METHOD'] != 'POST'){
    $query = "SELECT COUNT(*) FROM tests";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $_SESSION['count'] = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
}
    $count = $_SESSION['count'] ?? 0; */

    $query = "SELECT COUNT(*) FROM tests";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];




/* if ( $_SESSION['count'] || $_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "SELECT COUNT(*) FROM tests";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $_SESSION['count'] = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
    $count = $_SESSION['count'];
}
else{
    $count = $_SESSION['count'];
} */