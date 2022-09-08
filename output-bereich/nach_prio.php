<?php
	
	if(empty_table($pdo)){

	} else {
		if(count_rows($pdo, "SELECT COUNT(*) FROM Aufgabenliste WHERE priorität='hoch'")!=0){
			echo '<div class="mt-3 ml-3">
					<h5 class="card-title"> Priorität: hoch </h5>
				</div>';
			echo '<ul class="list-group list-group-flush">';
			display($pdo,"SELECT * FROM Aufgabenliste WHERE priorität='hoch' ORDER BY status DESC","prio");
			echo '</ul>';
		};

		if(count_rows($pdo, "SELECT COUNT(*) FROM Aufgabenliste WHERE priorität='mittel'")!=0){
			echo '<div class="mt-3 ml-3">
					<h5 class="card-title"> Priorität: mittel</h5> 
				</div>';
			echo '<ul class="list-group list-group-flush">';
			display($pdo,"SELECT * FROM Aufgabenliste WHERE priorität='mittel' ORDER BY status DESC","prio");
			echo '</ul>';
		};

		if(count_rows($pdo, "SELECT COUNT(*) FROM Aufgabenliste WHERE priorität='gering'")!=0){
			echo '<div class="mt-3 ml-3"> 
					<h5 class="card-title"> Priorität: gering </h5>
				</div>';
			echo '<ul class="list-group list-group-flush">';
			display($pdo,"SELECT * FROM Aufgabenliste WHERE priorität='gering' ORDER BY status DESC","prio");
			echo '</ul>';	
		};   
	}; 			
?>  