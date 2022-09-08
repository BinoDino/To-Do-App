<!-- neunen Eintrag (in der Datenbank) anlegen-->
<?php
  	if(isset($_POST['eintragen'])) {
      	$aufgabe=$_POST['neueAufgabe'];
        $tag=$_POST['tags'];
        $prio=$_POST['prios'];
      	if($aufgabe != ""){
      		$pdo->query("INSERT INTO Aufgabenliste VALUES (NULL,'".$aufgabe."','offen','".$tag."','".$prio."')");
      	};
      	unset($_POST['eintragen']);
    };
?>