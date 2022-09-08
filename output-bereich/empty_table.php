<?php
	function empty_table($p){
		$count=count_rows($p,"SELECT COUNT(*) FROM Aufgabenliste");
		if ($count==0){
			echo '<br/><p class="card-text ml-3 text-muted">
					Aktuell sind keine Aufgaben in der Liste eingetragen.
				</p> <br/>';
			return 1;	
		};
		return 0;
	}
?>