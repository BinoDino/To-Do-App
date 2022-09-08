<?php
	/* Anzahl der Tabelleneinträge bestimmen*/
	function count_rows($p,$query) {
		$count=$p->query($query)->fetchColumn();
		return $count; 
	}
?>