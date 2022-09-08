<?php
	if(isset($_GET['del'])){
		$id=intval($_GET['id']);	
	
		$update=$pdo->prepare("DELETE FROM Aufgabenliste WHERE id=?");
		$update->execute([$id]);
	};

?>