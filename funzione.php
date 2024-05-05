<?php

function GeneratorePassword($Passwordleght, $numeri, $lettere_Maiuscole, $lettere_minuscole, $simboli){

    
    $password = "";

    for ($i=0; $i < $Passwordleght ; $i++) { 
    
        $rndomNum = chr(rand(48, 57)); // numeri 
        $rndomLETTERE = chr(rand(65, 90)); // lettere maiuscole
        $rndomlettere = chr(rand(97, 122)); // lettere minuscole
        $rndomsimboli = chr(rand(33, 47));  // simboli / caratteri speciali
        // $password = $password . $rndomNum;
        // $letter = chr(rand(33,126)); // chr(rand(33,126)) = include numeri,lettere e caratteri speciali
        // $password = $password . $letter . $rndomNum;

        if($numeri === 'on'){ // genero numeri casuali
            $password = $password .  $rndomNum;
        }

        if($lettere_Maiuscole === 'on'){  // genero lettere maiuscole casuali
            $password = $password . $rndomLETTERE;
        }
        
        if($lettere_minuscole === 'on'){ // genero lettere minuscole causali
            $password = $password . $rndomlettere;
        }

        if($simboli === 'on'){ // genero simboli casuali
            $password = $password . $rndomsimboli;
        }
        
        // se nel caso l'utente decida di non selezionare nessuna opzione allora mando un messaggio di alert dove specifico che almeno un opzione deve essere selezionata
        if($numeri !== 'on' && $lettere_Maiuscole !== 'on' && $lettere_minuscole !== 'on' && $simboli !== 'on'){
            echo "Seleziona almeno una checkbox";
        }

        echo $password; 
    };
    
   
    
    
    
    
    
    
    
    





}






?>