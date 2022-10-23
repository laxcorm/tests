<?php

/* $query = "SELECT COUNT(*) FROM tests";
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
if ($count < $id) {
    require('final.php');
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


