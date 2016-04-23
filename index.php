
<?php include('includes/header.php'); 
$stmt = $db->prepare("SELECT * FROM writings");
$stmt->execute();
$writings = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<table class="table">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
		</tr>
	</thead>
<?php foreach ($writings as $writing): ?>
	<tbody>
		<tr>
			<td><?php echo $writing->title?></td>
			<td><?php echo $writing->content?></td>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>

<?php include('includes/footer.php'); ?>




