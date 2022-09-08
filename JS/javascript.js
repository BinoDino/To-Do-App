// Anklicken der Tabs 

$(document).ready(function(){
	$(".nav-tabs a").click(function(){
    	$(this).tab('show');
    });
});


//Bestätigen, dass man ein Element löschen möchte 

function confirm_delete(id,aufgabe){
	if(confirm("Wollen Sie die Aufgabe '" + aufgabe + "' wirklich löschen?")){
		document.location="index.php?del=true&id="+id;
	};
};

// Bestätigen, dass man alle erledigten Elemente löschen möchte 

function confirm_delAllDone(){
	if(confirm("Wollen Sie wirklich alle erledigten Aufgaben löschen?")){
		document.location="index.php?delAllDone=true";
	};
};

// Bestätigen, dass man alle Aufgaben löschen möchte

function confirm_delAll(){
	if(confirm("Wollen Sie wirklich alle Aufgaben löschen?")){
		document.location="index.php?delAll=true";
	};
};