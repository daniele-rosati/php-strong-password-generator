<?php

function GeneratorePassword($Passwordleght, $numeri, $lettere_M, $lettere_m, $simboli){

    
    $password = "";

    for ($i=0; $i < $Passwordleght ; $i++) { 
    
        $rndomNum = chr(rand(48, 57)); 
        $rndomLETTERE = chr(rand(65, 90));
        $rndomlettere = chr(rand(97, 122));
        $rndomsimboli = chr(rand(33, 47));
        // $password = $password . $rndomNum;
        // $letter = chr(rand(33,126)); // chr(rand(33,126)) = include numeri,lettere e caratteri speciali
        // $password = $password . $letter . $rndomNum;

        if($numeri === 'on'){
            $password = $password .  $rndomNum;
        }

        if($lettere_M === 'on'){
            $password = $password . $rndomLETTERE;
        }
        
        if($lettere_m === 'on'){
            $password = $password . $rndomlettere;
        }

        if($simboli === 'on'){
            $password = $password . $rndomsimboli;
        }

        if($numeri !== 'on' && $lettere_M !== 'on' && $lettere_m !== 'on' && $simboli !== 'on'){
            echo "Seleziona almeno una checkbox";
        }

        
        echo $password; 
    };
    
   
    
    
    
    
    
    
    
    





}






?>