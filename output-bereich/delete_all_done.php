<?php
	if (isset($_GET['delAllDone'])){

		$sql="SELECT * FROM Aufgabenliste WHERE status='erledigt'";
		foreach($pdo->query($sql) as $row){
			$id=$row['id'];
			$delete=$pdo->prepare("DELETE FROM Aufgabenliste WHERE id=?");
			$delete->execute([$id]);
		}
	}
?>