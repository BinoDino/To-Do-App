<?php
	if (isset($_GET['allDone'])){
		$sql="SELECT * FROM Aufgabenliste WHERE status='offen'";

		foreach($pdo->query($sql) as $row){
			$id=$row['id'];
			$update=$pdo->prepare("UPDATE Aufgabenliste SET status='erledigt' WHERE id=?");
			$update->execute([$id]);
		}
	};
?>