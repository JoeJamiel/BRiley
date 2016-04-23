<?php 
include('connection.php');

$title = $_POST['title'];
$content = $_POST['content'];

$stmt = $db->prepare("INSERT INTO writings(title, content) VALUES (?,?)");
$stmt->execute([$title, $content]);

header('Location: index.php');
 ?>
