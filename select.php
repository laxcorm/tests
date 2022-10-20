<?php
<<<<<<< HEAD

/* $query = "SELECT COUNT(*) FROM tests";
=======
require('mysql.php');

$query = "SELECT COUNT(*) FROM tests";
>>>>>>> 5e7dc8569588b9e9f4fe5e8f4cc078f493980e23
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
if ($count < $id) {
    require('final.php');
<<<<<<< HEAD
} */
//не выводить ответы

if ($id > $count) {
    $test = ['id' => $id, 'questions' => '', 'answer_1' => '', 'answer_2' => '', 'answer_3' => '', 'answer' => ''];
} else {
    if (isset($_SESSION['authorized'])) {
        $query = "SELECT*FROM tests WHERE id=" . $id/* ($id = $id + ($step ?? 0)) */; //зачем 0
    } else {
        $query = "SELECT questions, answer_1, answer_2, answer_3 FROM tests WHERE id=" . $id;
    }
    $stmt = $db->prepare($query);
    $stmt->execute();
    $test = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $test = empty($test)? false :$test[0];
    if ($test) {
        $test =  $test[0];
    }
}
var_dump($test);

=======
}
$query = "SELECT*FROM tests WHERE id=" . $id;
echo $query;
$stmt = $db->prepare($query);
$stmt->execute();
$test = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
>>>>>>> 5e7dc8569588b9e9f4fe5e8f4cc078f493980e23
