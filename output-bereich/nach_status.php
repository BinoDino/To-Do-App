<?php

	if (empty_table($pdo)){
		
	} else{
		echo '<br/><ul class="list-group list-group-flush">';
		display($pdo,"SELECT * FROM Aufgabenliste ORDER BY status DESC","status");
		echo '</ul>';
	};	
?> 