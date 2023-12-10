<?php
// La fonction COPY()


    if(file_exists('fichiers/monFichier.txt.txt')) {
        copy('fichiers/monFichier.txt.txt','fichiersCopy/fichierA');
        echo 'Le fichier a bien été copié !<br>';

    }else {
        echo 'Vérifiez si le fichier existe !<br>';
    }
?>

