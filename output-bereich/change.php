<?php
	if(isset($_GET['status'])){
		$id=intval($_GET['id']);
		$status=$_GET['status'];
		
		if($status=='offen'){
			$update=$pdo->prepare("UPDATE Aufgabenliste SET status='erledigt' WHERE id=?");
			$update->execute([$id]);
		} else {
			$update=$pdo->prepare("UPDATE Aufgabenliste SET status='offen' WHERE id=?");
			$update->execute([$id]);
		};
	};
?>