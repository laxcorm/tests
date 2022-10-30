<?php

if (
    $_POST['id'] ?? false
) {
    $id = $_POST['id'];

    if ((count($_SESSION['questions'] ?? [])) < $id+1 && !isset($_GET['answ'])
    ) {
        $noanswer = true;
    }
    /* elseif (isset($_GET['answ'])) {
        $_SESSION['questions'][abs($id)] = $_GET['answ'];
    } */ else {
        if (isset($_GET['answ'])) {
            $_SESSION['questions'][abs($id)] = $_GET['answ'];
        }
        $id = abs($id + 1);
    }
    if (isset($_SESSION['questions'][$id])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
} else {
    $id = 1;
}