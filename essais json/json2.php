<?php

function open_csv_json() {
    
    $data = array();
    $l = 1;
    $fichier = fopen("utilisateurs.csv", "a+");
    $cs = fgetcsv($fichier,"1024",";");
    $key = explode(';' , $cs[0]);

    while($tab=fgetcsv($fichier,1024,';')){
        $champs = count($tab);
        $l ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(';', $tab[$i] );
            $data = array_combine($key, $row);
        }
    }
    
    return json_encode($data);
}

function groupeLPI() {
    $groupeLPI = array();
    $l = 1;
    $fichier = fopen("utilisateurs.csv", "a+");

    while($tab=fgetcsv($fichier,1024,';')){
        $champs = count($tab);
        $l ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(';', $tab[$i] );
            print_r($tab[$i]);
            if ($tab[$i]=="LPI") {
                array_push($groupeLPI, $row);
            }
        }
    }
    return $groupeLPI ;
}
function groupeMIPI() {
    $groupeMIPI = array();
    $l = 1;
    $fichier = fopen("utilisateurs.csv", "a+");

    while($tab=fgetcsv($fichier,1024,';')){
        $champs = count($tab);
        $l ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(';', $tab[$i] );
            if ($tab[$i]=='MIPI') {
                array_push($groupeMIPI, $row);
            }
        }

    }
    return $groupeMIPI;
}
function groupeL1() {
    $groupeL1 = array();
    $l = 1;
    $fichier = fopen("utilisateurs.csv", "a+");

    while($tab=fgetcsv($fichier,1024,';')){
        $champs = count($tab);
        $l ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(';', $tab[$i] );
            if ($tab[$i]=='L1') {
                array_push($groupeL1, $row);
            }
        }

    }
    return $groupeL1;
}



groupeLPI();
?>
