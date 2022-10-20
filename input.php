<?php
<<<<<<< HEAD

if ($_POST['input'] == 'save') {
    $question = trim($_POST['question']);

    $answer = $_POST['answ'];
    $answer_1 = trim($_POST['answer_1']);
    $answer_2 = trim($_POST['answer_2']);
    $answer_3 = trim($_POST['answer_3']);

    $query = 'INSERT INTO tests(questions, answer_1,answer_2,answer_3, answer) VALUES(:question, :answer_1, :answer_2, :answer_3, :answer)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':question', $question, PDO::PARAM_STR);
    $stmt->bindValue(':answer_1', $answer_1, PDO::PARAM_STR);
    $stmt->bindValue(':answer_2', $answer_2, PDO::PARAM_STR);
    $stmt->bindValue(':answer_3', $answer_3, PDO::PARAM_STR);
    $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    $stmt->execute();
} elseif (is_int($id = (int) $_POST['input'])) {
    //$id = $_POST['input'];

    $question = trim($_POST['question']);
    $answer = $_POST['answ'];
    $answer_1 = trim($_POST['answer_1']);
    $answer_2 = trim($_POST['answer_2']);
    $answer_3 = trim($_POST['answer_3']);

    $query = 'UPDATE tests SET questions = :question, answer_1 = :answer_1, answer_2 = :answer_2 ,answer_3 = :answer_3, answer = :answer WHERE id='.$id;
    $stmt = $db->prepare($query);
    $stmt->bindValue(':question', $question, PDO::PARAM_STR);
    $stmt->bindValue(':answer_1', $answer_1, PDO::PARAM_STR);
    $stmt->bindValue(':answer_2', $answer_2, PDO::PARAM_STR);
    $stmt->bindValue(':answer_3', $answer_3, PDO::PARAM_STR);
    $stmt->bindValue(':answer', $answer, PDO::PARAM_STR);
    $stmt->execute();
}

=======
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
>>>>>>> 5e7dc8569588b9e9f4fe5e8f4cc078f493980e23
