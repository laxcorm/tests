<?php
<<<<<<< HEAD

    echo $_SERVER['SCRIPT_NAME'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="get">
<input type="radio" name='test' value="justes">
</form>
<a href="<?php echo $_SERVER['SCRIPT_NAME'] ?>">Submit</a>

<?php
/*
require('mysql.php');
=======
require('mysql.php');


>>>>>>> 5e7dc8569588b9e9f4fe5e8f4cc078f493980e23
$query = "SELECT COUNT(*) FROM tests";
$stmt = $db->prepare($query);
$stmt->execute();
$count = (int)$stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];
<<<<<<< HEAD
*/

// $id = false;
// echo $id ?  "Touch" :  "No";

=======
>>>>>>> 5e7dc8569588b9e9f4fe5e8f4cc078f493980e23
