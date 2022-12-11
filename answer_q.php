<?php

if (isset($_GET['new'])) {
    $id = $_SESSION['count'] + 1;
} else {
    if (isset($_GET['id'])) {
        echo $_GET['id']; //временно
        echo "<br>"; //временно
        $id = $_GET['id'];
    } else {
        $id = 1;
    }
    require('select.php');
}

//for test id
if (isset($id)) {
    echo "id - $id";
}
