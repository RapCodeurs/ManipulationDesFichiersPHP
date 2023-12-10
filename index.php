<?php

    echo "<h1>Bonjour à tous</h1><br>";


    $date = date("Y/d/m");
    echo "Nous sommes aujourd'hui le : ". $date. "<br>";
    echo " "."<br>";

    for($i = 1; $i <= 10; $i++){
        echo $i."<br>";
    }


    $file = fopen("monFichier.txt.txt", "r");
    $content = fread($file, filesize("monFichier.txt.txt"));


    if($file){
        while(($ffileOne = fgets($file)) !== false){
            echo $ffileOne;
        }
    }
    fclose($file);
    
    echo $content."<br>";

    $contents = file_get_contents('monFichier.txt.txt');
    echo $contents."<br>";

    $ecrire = fopen("monNewFiles.txt.txt", "w");
    $lire = fopen("monNewFiles.txt.txt", "r");
    $filesWrite = 'Je suis très heureux d\'apprendre la programmation';
    $contenuFicher = fwrite($ecrire, $filesWrite);
    $contenuFicher1 = fread($lire, filesize("monNewFiles.txt.txt"));
    fclose($ecrire);
    fclose($lire);

    if( $contenuFicher !== false){
        echo 'Ecriture de '. $contenuFicher.' Octets ';
    } else {
        echo "Erreur lors de l'écriture du fichier.<br>";
    }

    echo ""."<br>";
    echo $contenuFicher1."<br>";

    $file = 'monfichier.txt';
    $content = 'Contenu à écrire dans le fichier';
    echo file_put_contents($file, $content);
    //echo $mes;
    


?>