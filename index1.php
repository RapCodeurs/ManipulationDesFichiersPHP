<?php

$file = fopen("fichierA.txt", "w");

if($file){
    fwrite($file, "Je vais tout casser en programmation !");
}
fclose($file);

$count = 0;
$filesCount = fopen("fichierA.txt", "r");

while(!feof($filesCount)){

    $line = fgets($filesCount);
    $count++;
}
echo " Le fichier contient " . $count . " ligne(s)";
$fileAdd = fopen("fichierA.txt", "a");

if($fileAdd){
    fwrite($fileAdd, "\nJe ne cesserai de progresser en programmation !" );
    fclose($fileAdd);
}


$fileUpdate = fopen("fichierA.txt", "r");
echo "<br><br> Le fichier contient desormais :";

while(!feof($fileUpdate)){
    $line = fgets($fileUpdate);
    echo "<br>".$line;
}

fclose($fileUpdate);






