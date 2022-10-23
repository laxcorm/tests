<?php


if ($_GET['id'] ?? false) {
    $step = ($_GET['id'] > 0) ? 1 : -1;
    $id = abs($_GET['id']);
    $id = $id + $step;
}

if($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST'] . "/auth.php" && !isset($_GET['id'])) {
    $id = 1;
}

if (!isset($_SESSION['authorized'])) {
    if ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST']) {
        $step = 1;
        $id = 1;
    }
    if ((!isset($_SESSION['questions'][$id])) && !isset($_GET['answ']) && $step != -1) {
        $step = 0;
        $noanswer = true;
    } else {
        $_SESSION['questions'][$id] = $_GET['answ'];
    }

    if (isset($_SESSION['questions'][$id + $step])) {
        ${$_SESSION['questions'][$id + $step]} = 'checked';
    }  
    $id = $id + $step;
}