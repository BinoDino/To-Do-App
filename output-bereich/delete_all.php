<?php
	if (isset($_GET['delAll'])){

		$sql="TRUNCATE TABLE Aufgabenliste";
		$pdo->query($sql);

		$ai="ALTER TABLE Aufgabenliste AUTO_INCREMENT=1";
		$pdo->query($sql);
	};
?>
