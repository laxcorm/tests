<?php
session_start();
// $_SESSION['authorized'] = true;
require('mysql.php');

/* if ($_SESSION['authorized'] ?? false) {
    exit; 
} */
// require('pagination.php');
/* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['question'])) {
        //error
    } elseif (empty($_POST['answ'])) {
        //error
    } elseif (!empty($_POST['question']) && !empty($_POST['answ'])) {
        require('input.php');
    }
 } */
require('count.php');
//require('step.php');
require('answer_q.php');
//require('select.php');
if (isset($test['answer'])) {
    ${$test['answer']} = 'checked';
}

//настройка
if ($_POST['input'] ?? false) {
    echo $_POST['input'];
}
// $_SESSION['answer'] = $test['answer'];
// ${$test['answer']} = 'checked';

// if ($_SESSION['questions']) {
//     require_once('checked_in.php');
// }
echo "<br>";
echo $_SESSION['count'];
echo "<br>";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin</title>
</head>

<body>

    <div class="container">
            <form method="post" action="<?php echo 'input.php'; ?> ">
            <div class="row mt-3">
                <div class="col">
                    <!-- <form> -->
                    <div class="form-group">

                        <textarea class="form-control" name="question" row mt-3s="3">
                                <?php echo $test['questions'] ?? '' ?>
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="answer_1" aria-label="Radio button for following text input" <?php echo $answer_1 ?? ''; ?>>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="answer_1" class="form-control" aria-label="Text input with radio button" value="<?php echo $test['answer_1'] ?? ''; ?>">
                </div>
            </div>
            <div class=" row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="answer_2" aria-label="Radio button for following text input" <?php echo $answer_2 ?? ''; ?>>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="answer_2" class="form-control" aria-label="Text input with radio button" value="<?php echo $test['answer_2'] ?? ''; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="answer_3" aria-label="Radio button for following text input" <?php echo $answer_3 ?? ''; ?>>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="answer_3" class="form-control" aria-label="Text input with radio button" value="<?php echo $test['answer_3'] ?? ''; ?>">
                </div>
            </div>
            <div class="col-3"><button class="btn btn-outline-info" type="submit" name="input" value="<?php echo $id  /*select - выводить id*/ ?>">Save</button></div>
            <!-- вместо count вставить сессию - count -->
            <!-- <div class="col-3"><button class="btn btn-outline-info" type="submit" name="id" value="<?php //echo $count + 1 ?>">+</button></div> -->
        </form>
    </div>

    <div class="row mt-3">
        <?php //if (!$id) : 
        ?>
        <!-- <div class=" col-3"> <button class="btn btn-outline-info" type="submit" name="test" value="<?php echo $id ?>"> <span class="material-icons">arrow_back_ios</span></button></div> -->

        <?php if ($id <= $count) : ?>
            <a href="<?php echo $_SERVER['SCRIPT_NAME'].'?new' ?>" class="btn btn-primary btn-lg" role="button">+</a>
            <a href="delete.php?id=<?php echo $id ?>" class="btn btn-primary btn-lg" role="button">Delete</a>
        <?php endif ?>

        <!-- <div class="col-3"><button class="btn btn-outline-info" type="submit" name="test" value="<?php echo $_SERVER['SCRIPT_NAME'] ?>">+</button></div> -->
        <!-- <div class="col-3"><button class="btn btn-outline-info" type="submit" name="test" value="delete.php?id=<?php echo $id ?>">Delete</button></div> -->

        <!-- <div class=" col-3"> <button class="btn btn-outline-info" type="submit" name="test" value="<?php echo $id ?>"> <span class="material-icons">arrow_back_ios</span></button></div> -->
        <!-- <div class="col-3"> <button class="btn btn-outline-info" type="submit" name="test" value="<?php echo $id ?>"><span class="material-icons"> arrow_forward_ios</span></button></div> -->

        <?php //endif 
        ?>
        <!-- <div class="col"><input class="btn btn-primary" type="submit" value="Submit"></div>
                <span class="material-icons">
                    arrow_back
                </span>
                <span class="material-icons">
                    arrow_forward
                </span> -->
    </div>
    <div class="row mt-3">
        <?php
        if (isset($id) ?? false) {
            require('arrows_fil.php');
        }
        ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery answer_1, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>