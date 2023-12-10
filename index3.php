<?php
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
	    $file = $_FILES['file']['name'];
	    $destination = "uploads/";
	    $target_dir = $destination . basename($file);

	if (file_exists($target_dir)) {
	    $backup_file = $destination . 'backup' . basename($file); 
	    copy($target_dir, $backup_file);
	    $rename_file = $destination . 'rename' . basename($file);
	    rename($target_dir, $rename_file);
	    unlink($backup_file);
	    echo "Le fichier a bien été remplacé avec succès";

	} else { 
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir);
        echo "Le fichier ".$file." a bien été téléchargé";
    } 
	
	}else { 
	    echo "Il y a eu une erreur lors du téléchargement du fichier";
	}

	