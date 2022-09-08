<?php
	if(isset($_POST['fertig'])){
		$aufgabe=$_POST['bearbeiteteAufgabe'];
		$tag=$_POST['radioTags'];
		$prio=$_POST['radioPrios'];
		$id=$_POST['id'];
		
		$edit=$pdo->prepare("UPDATE Aufgabenliste SET aufgabe=?, tag=?, priorität=? WHERE id=?");
		$edit->execute([$aufgabe,$tag,$prio,$id]);
		
		unset($_POST['fertig']);	
	};
	
?>