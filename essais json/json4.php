<?php

function csvToJson() {
    
    $json = array();
    $ligne = 1;
    $fic = fopen("csv/etudiant.csv", "a+");
    $cle = fgetcsv($fic,"1024",",");
    $key = explode(',' , $cle[0]);

    while($tab=fgetcsv($fic,1024,';')){
        $champs = count($tab);
        $ligne ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(',', $tab[$i] );
            $json = array_combine($key, $row);
        }
    }
    
    return json_encode($json);
}

function groupeLPI() {
    $groupeLPI = array();
    $ligne = 1;
    $fic = fopen("csv/etudiant.csv", "a+");

    while($tab=fgetcsv($fic,1024,';')){
        $champs = count($tab);
        $ligne ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(',', $tab[$i] );
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
    $ligne = 1;
    $fic = fopen("csv/etudiant.csv", "a+");

    while($tab=fgetcsv($fic,1024,';')){
        $champs = count($tab);
        $ligne ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(',', $tab[$i] );
            if ($tab[$i]=='MIPI') {
                array_push($groupeMIPI, $row);
            }
        }

    }
    return $groupeMIPI;
}
function groupeL1() {
    $groupeL1 = array();
    $ligne = 1;
    $fic = fopen("csv/etudiant.csv", "a+");

    while($tab=fgetcsv($fic,1024,';')){
        $champs = count($tab);
        $ligne ++;

        for($i=0; $i<$champs; $i ++){
            $row = explode(',', $tab[$i] );
            if ($tab[$i]=='L1') {
                array_push($groupeL1, $row);
            }
        }

    }
    return $groupeL1;
}



groupeLPI();
?>
