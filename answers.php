<?php

    /*  if ($_SERVER['HTTP_REFERER'] == "http://" . $_SERVER['HTTP_HOST']) {
            $id = 1;
         } */
         

    if ((!isset($_SESSION['questions'][$id])) && !isset($_GET['answ'])) {
        $id = $id - 1;
        $noanswer = true;
    } else {
        $_SESSION['questions'][$id] = $_GET['answ'];
    }

    if (isset($_SESSION['questions'][$id])) {
        ${$_SESSION['questions'][$id]} = 'checked';
    }
  

