

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search Result</title>
</head>

<body>

<?php
	if (isset($_POST['id'])){
		$id = $_POST['id'];
	}

require 'db/connect.php';
require 'db/operation.php';

$pddb = Connect();

Create($pddb);

$books = Data($pddb);
$books = $books->fetchAll(PDO::FETCH_ASSOC);

  $ck = false;
  foreach ($books as $book) {
    if ($book['id'] == $id) {
    	$result = $book;
    	$ck = true;
    }
  }

  if($ck == false)
  	header('Location: 404.php');
?>

<h1 align = "center"> Showing Search Result </h1>
<table align="center" border="2">
	<tr>
		<th> Id </th>
		<th> Title </th>
		<th> Author </th>
		<th> Pages </th>
		<th> Available </th>
		<th> Isbn </th>
	</tr>
	<tr>
		<td>
			<?php echo $result['id']; ?>
		</td>
		<td>
			<?php echo $result['title']; ?>
		</td>
		<td>
			<?php echo $result['author']; ?>
		</td>
		<td>
			<?php echo $result['pages']; ?>
		</td>
		<td>
			<?php echo $book['available']; ?>
		</td>
		<td>
			<?php echo $result['isbn']; ?>
		</td>
	</tr>
</table>
</div>
</body>
</html>
