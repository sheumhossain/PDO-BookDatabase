<?php
$id = $_GET['id'];

require 'connectDatabase.php';
require 'operationDatabase.php';

$pddb = Connect();

Delete($pddb, $id);

header('Location: index.php');
?>
Deleted!