<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('mysql.php');
    $question = trim($_POST['question']);
    $answer = $_POST['answ'];
    $first = trim($_POST['first']);
    $second = trim($_POST['second']);
    $third = trim($_POST['third']);

    $query = 'INSERT INTO tests(questions, first,second,third, answer) VALUES(:question, :first, :second, :third, :answer)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':question', $question, PDO::PARAM_STR);
    $stmt->bindValue(':first', $first, PDO::PARAM_STR);
    $stmt->bindValue(':second', $second, PDO::PARAM_STR);
    $stmt->bindValue(':third', $third, PDO::PARAM_STR);
    $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    $stmt->execute();
}
