<?php

require 'connectDatabase.php';
require 'operationDatabase.php';

$pddb = Connect();
$data_added = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ADD($pddb, $_POST['title'], $_POST['author'], $_POST['available'], $_POST['pages'], $_POST['isbn']);
    $data_added = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insert a book information</title>
</head>

<body>
    <a href="index.php">
        <h1> Home </h1>
    </a>
    <div>
        <h1 style="text-align: center;">Insert a Book</h1>
        <center>
            <form action="" method="post">
                
                <div>
                    <label for="">Title</label>
                    <input type="text" name="title" required>
                </div>
                <div>
                    <label for="">Author</label>
                    <input type="text" name="author" required>
                </div>
                <div>
                    <label for="">Availablity</label>
                    <div style="width: 80%; justify-content: start;">
                        <div><input type="radio" name="available" value="true" required> True</div>
                        <div><input type="radio" name="available"> False</div>
                    </div>
                </div>
                <div>
                    <label for="">Pages</label>
                    <input type="text" name="pages" required>
                </div>
                <div>
                    <label for="">ISBN</label>
                    <input type="text" name="isbn" required>
                </div>
                <div>
                    <input type="submit" value="Submit" required>
                </div>
            </form>
        </center>
    </div>
</body>

</html>
