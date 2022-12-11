<?php

if (
    $_GET['id'] ?? false
) {
    echo $_GET['id'];//временно
echo "<br>";//временно
    $id = $_GET['id'];
    require('select.php');
}
// else {
//     $id = 1;
// }
//for test id
if (isset($id)) {
    echo "id - $id";
}
