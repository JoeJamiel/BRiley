<?php 
try{
	$db = new PDO('mysql:host=localhost;dbname=BrittsContent;','root' , '');
}catch(PDOException $e){
	echo $e->getMessage();
}


 ?>