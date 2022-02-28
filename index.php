<?php

require 'db/connect.php';
require 'db/operation.php';

$pddb = Connect();

Create($pddb);

$books = Data($pddb);
$books = $books->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
</head>

<body>


    <a href="index.php">
        <h1> Home </h1>
    </a>
    <a href="create.php">
        <h1> Create </h1>
    </a>
    <a href="search.php">
        <h1> Search </h1>
    </a>

    <h1 align="center"> All Books Information</h1>
    <table align="center" border="2">
        <tr>
            <th> Id </th>
            <th> Title </th>
            <th> Author </th>
            <th> Pages </th>
            <th> Available </th>
            <th> Isbn </th>
            <th> Operation </th>
        </tr>
        <?php foreach ($books as $value => $book) : ?>
        <tr>
            <td>
                <?php echo $value + 1; ?>
            </td>
            <td>
                <?php echo $book['title']; ?>
            </td>
            <td>
                <?php echo $book['author']; ?>
            </td>
            <td>
                <?php echo $book['pages']; ?>
            </td>
            <td>
                <?php echo $book['available']; ?>
            </td>
            <td>
                <?php echo $book['isbn']; ?>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $book['id']  ?>."
                    onClick="javascript:return confirm('Are you want to delete this?');">
                    <button class="btn-delete"> Delete </button>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>