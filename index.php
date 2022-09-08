<?php 
	include("dbcon/dbconnect.php");
?>
<!DOCTYPE html>
<head>
	<?php 
		include("head/head.php");
	?>
</head>
<body>
	<div class="container mt-3">
		<div class="card">
			<header class="card-header display-4" id="svg">
		      To-Do-Liste
		    </header>
		</div>
	</div>	
	<div class="container mt-3 mb-3">
		<div class="card">
			<div class="card-header">
	      		Meine Aufgaben
	      	</div>
	      	<div class="card-body">
	      	<!-- Button, um Input-Bereich zu öffnen (Modal) -------------------------------->	
	    		<button class="btn btn-outline-info" data-toggle="modal" data-target="#myModal">
	    			Neue Aufgabe
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
	  					<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
	  					<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
					</svg>
				</button> 
			<!-- Dropdown-Button mit weiteren Funktionen -->
				<div class="dropdown dropleft float-right">
	  				<button class="btn btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown">
	  					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
	  					<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
						</svg>
	    				<span class="caret"></span>
	    			</button>
				  	<ul class="dropdown-menu">
				      <li><a class="dropdown-item" href="#" onclick="return confirm_delAll()"> Alle Aufgaben löschen</a></li>
					  <li><a class="dropdown-item" href="#" onclick="return confirm_delAllDone()"> Erledigte Aufgaben löschen</a></li>
					  <li><a class="dropdown-item" href="index.php?allDone=true"> Alle Aufgaben als erledigt markieren</a></li>
				    </ul>
				</div>    
				<?php
					include("input-bereich/input_form.php");
					include("input-bereich/new_db_entry.php");
				?>
			</div>	
		<!--Output-Bereich startet hier ----------------------------------------------------->		 	
		<!-- Tabs ----------------------------------------------------------------------->
			<div class="mt-3">      	
		    	<ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" href="#status">Sortieren nach Status</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#tag">Sortieren nach Tags</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#prio">Sortieren nach Priorität </a>
				  </li>
				</ul>
			</div>
	    <!-- Funktionalitäten müssen vor Tab-Content geladen werden, sonst sieht man Ergebnis der DB-Abfrage nicht, weil Content vor Ausführung geladen wird ------------->
	    	<?php
	    		include("output-bereich/display.php");
	    		include("output-bereich/count_rows.php");
	    		include("output-bereich/empty_table.php");
	    		include("output-bereich/change.php");
				include("output-bereich/delete.php");
				include("output-bereich/edit.php");
				include("output-bereich/delete_all_done.php");
				include("output-bereich/all_done.php");
				include("output-bereich/delete_all.php");
	    	?>
	    <!--Tab-Content --------------------------------------------------------------->
	    	<div class="tab-content">
	  			<div id="status" class="tab-pane fade show active">
				    <?php 
				      include("output-bereich/nach_status.php");
				    ?>
	  			</div>
				<div id="tag" class="tab-pane fade">
					<?php 
			      		include("output-bereich/nach_tags.php");
			    	?>
				</div>
				<div id="prio" class="tab-pane fade">
					<?php 
			      		include("output-bereich/nach_prio.php");
			    	?>
				</div>
			</div>
	    </div>  		
	  
	  <!--Attribution-->
		<div class="card mt-3 p-0">
			<div class="card-body px-1 py-2">
				<p class="mb-0"><small>Header background created by <a class="text-dark" target="_blank" rel="noopener noreferrer" href="https://www.svgbackgrounds.com/">SVG Backgrounds</a> license CC BY 4.0.</small></p>
			</div>
		</div>
	</div>
	<script src="JS/javascript.js">
	</script>
</body>
</html>