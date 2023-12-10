<?php

	if(is_dir('Documents')){
		echo 'Le dossier existe déja !<br>';

	} else {
		if(mkdir('Documents')){
			echo "Le repertoire 'Documents' a été crée !<br>";
		}
	}

	$file = fopen('Documents/mkdir.txt', 'w');

	if($file){
		fwrite($file, 'Voici le fichierContent pour mkdir');
		fclose($file);
	} else {
			echo 'Impossible de créer le fichier !<br>';
	}
	

	if(file_exists('Documents/mkdir.txt')){
		if(is_dir('Backup')){
			echo 'Il existe déja <br>';
		} else {
			mkdir('Backup');
			if(copy('Documents/mkdir.txt', 'Backup/mkdir')){
			   echo " le fichier 'mkdir.txt' a bien été copié dans le répertoire 'Backup' ";
			}
		}
	}
?>
