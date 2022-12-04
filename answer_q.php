<?php

if (
    $_GET['id'] ?? false
) {
    echo $_GET['id'];//временно
echo "<br>";//временно
    $id = $_GET['id'];
} else {
    $id = 1;
}
echo "id - $id";
