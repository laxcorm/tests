<?php

if (
    $_POST['id'] ?? false
) {
    $id = $_POST['id'];

    if ($count < $id + 1) {
        exit();
    }
    $id = abs($abs);

    /* elseif (isset($_GET['answ'])) {
        $_SESSION['questions'][abs($id)] = $_GET['answ'];
    } */
} else {
    $id = 1;
}
echo "id - $id";