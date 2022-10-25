<?php

if ($_GET['id'] ?? false) {
    $id = $_GET['id'];
    $id = $id +1;
    $id = abs($id);
}

