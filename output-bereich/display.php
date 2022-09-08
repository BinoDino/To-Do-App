<?php
	function display($p,$query,$tab){
		include('icons.php');
		foreach($p->query($query) as $row){
			if($row['status']=='offen'){
			/* Listen-Element offene Aufgabe */
			    echo '
			    	<li class="list-group-item list-group-item-info"> 
			    		<a class="text-reset" href="index.php?status=offen&id='.$row['id'].'">'
			    			.$icon_offen.'
			    		</a> '
			    		.$row['aufgabe'].'
			    		<div class="btn-group float-right"> 
			    			<button class="btn btn-info" data-toggle="collapse" data-target="#'.$tab.$row['id'].'">'
			    				.$pencil_offen.'
			    			</button> 
			    			<a href="#" onclick="return confirm_delete(\''.$row['id'].'\',\''.$row['aufgabe'].'\')" class="btn btn-info">'
			    				.$trash_offen.'
			    			</a> 
			    		</div> 
			    	</li>' ;
			/* Collapse-Element, mit dem man das Listenelement bearbeiten kann */
			    echo '<div id="'.$tab.$row['id'].'" class="collapse"> 
			    		<form class="m-3" method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
			    			<div class="mb-3">
  								<label for="bearbeiteteAufgabe'.$row['id'].'" class="form-label">Aufgabe:</label>
  								<input type="text" class="form-control" name="bearbeiteteAufgabe" value="'.$row['aufgabe'].'">
							</div>
							<div class="mb-3">
								<h6> Tags:</h6> 
								<div class="form-check form-check-inline">
	  								<input class="form-check-input" type="radio" id="stud'.$row['id'].'"" name="radioTags" value="studium" checked>
	  								<label class="form-check-label" for="stud'.$row['id'].'">Studium</label>
								</div>
								<div class="form-check form-check-inline">
	  								<input class="form-check-input" type="radio" id="haus'.$row['id'].'"" name="radioTags" value="haushalt">
	  								<label class="form-check-label" for="haus'.$row['id'].'">Haushalt</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="frei'.$row['id'].'"" name="radioTags" value="freizeit">
	  								<label class="form-check-label" for="frei'.$row['id'].'">Freizeit</label>
								</div>
			    			</div>
			    			<div class="mb-3">
			    				<h6> Priorität:</h6> 
								<div class="form-check form-check-inline">
	  								<input class="form-check-input" type="radio" id="h'.$row['id'].'"" name="radioPrios" value="hoch" checked>
	  								<label class="form-check-label" for="h'.$row['id'].'">hoch</label>
								</div>
								<div class="form-check form-check-inline">
	  								<input class="form-check-input" type="radio" id="m'.$row['id'].'"" name="radioPrios" value="mittel">
	  								<label class="form-check-label" for="m'.$row['id'].'">mittel</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="g'.$row['id'].'"" name="radioPrios" value="gering">
	  								<label class="form-check-label" for="g'.$row['id'].'">gering</label>
								</div>
			    			</div>
			    			<div class="mb-3">
			    				<input type="hidden" name="id" value="'.$row['id'].'" />
			    				<input class="btn btn-outline-info" type="submit" value="Änderungen übernehmen" name = "fertig"/>
			    			</div>
			    		</form>
			    		<hr/>
			    	</div>';
			} else {
				/* Listen-Element erledigte Aufgabe */
			     echo '
			     	<li class="list-group-item list-group-item-light border-top border-bottom"> 
			     		<a class="text-muted" href="index.php?status=erledigt&id='.$row['id'].'">'
			     			.$icon_erledigt.'
			     		</a> '
			     		.$row['aufgabe'].'
			     		<a href="#" onclick="return confirm_delete(\''.$row['id'].'\',\''.$row['aufgabe'].'\')" class="btn btn-outline-info float-right">'
			     			.$trash_erledigt.'
			     		</a> 
			        </li>'; 
			};
		};	
	};
?>