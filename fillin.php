<?php
require('input.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Input</title>
</head>

<body>
    <div class="container">
        <form method="post" action="<?= $_SERVER['SCRIPT_NAME']; ?>">
            <div class="row mt-3">
                <div class="col">
                    <!-- <form> -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" name="question" row mt-3s=" 3"></textarea>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="first" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="first" class="form-control" aria-label="Text input with radio button">
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="second" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="second" class="form-control" aria-label="Text input with radio button">
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="answ" value="third" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="third" class="form-control" aria-label="Text input with radio button">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col"><input class="btn btn-primary" type="submit" value="Submit"></div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>