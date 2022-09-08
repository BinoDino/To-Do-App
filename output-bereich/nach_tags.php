<?php
	if(empty_table($pdo)){

	} else {
		if(count_rows($pdo, "SELECT COUNT(*) FROM Aufgabenliste WHERE tag='studium'")!=0){
			echo '<div class="mt-3 ml-3">
					<h5 class="card-title"> Studium </h5>
				</div>';
			echo '<ul class="list-group list-group-flush">';
			display($pdo,"SELECT * FROM Aufgabenliste WHERE tag='studium' ORDER BY status DESC","tag");
			echo '</ul>';
		};

		if(count_rows($pdo, "SELECT COUNT(*) FROM Aufgabenliste WHERE tag='haushalt'")!=0){
			echo '<div class="mt-3 ml-3">
					<h5 class="card-title"> Haushalt</h5> 
				</div>';
			echo '<ul class="list-group list-group-flush">';
			display($pdo,"SELECT * FROM Aufgabenliste WHERE tag='haushalt' ORDER BY status DESC","tag");
			echo '</ul>';
		};

		if(count_rows($pdo, "SELECT COUNT(*) FROM Aufgabenliste WHERE tag='freizeit'")!=0){
			echo '<div class="mt-3 ml-3"> 
					<h5 class="card-title"> Freizeit </h5>
				</div>';
			echo '<ul class="list-group list-group-flush">';
			display($pdo,"SELECT * FROM Aufgabenliste WHERE tag='freizeit' ORDER BY status DESC","tag");
			echo '</ul>';	
		};   
	}; 			
?>  