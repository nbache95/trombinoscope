<?php
header('Content-Type: application/json');

// Depuis le site 2
$filieresJSON = file_get_contents("https://nbache-trombinoscope.000webhostapp.com/API/getAPI.php?requete=ALL&key=ABCDEFGHHIJK");
json_decode($filieresJSON);



if( isset($_GET["requete"]) && !empty($_GET["requete"]) ){
    
    if( $_GET["requete"] == "ALL" ){
        //echo( file_get_contents("./filieres_groupes.json") );
        readfile("./filieres_groupes.json");
    }
    
}

exit();
