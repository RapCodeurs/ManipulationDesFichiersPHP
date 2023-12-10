<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire de commande</title>
  </head>
  <body>
    <h1>Formulaire de commande</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required><br><br>
      <label for="adresse">Adresse :</label>
      <textarea name="adresse" id="adresse" required></textarea><br><br>
      <label for="produit">Produit :</label>
     <input type="text" name="produit" id="produit" required><br><br>
      <label for="prix">Prix :</label>
      <input type="number" name="prix" id="prix" required><br><br>
      <input type="submit" value="Envoyer">
    </form>
  </body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_POST['nom'])){
            // Récuparation des données 
            $articleName = $_POST['nom'];
            $articleAdresse = $_POST['adresse'];
            $articleProduit = $_POST['produit'];
            $articlePrice = $_POST['prix'];
            // Création d'un fichier de commande
            $file = fopen('Commande.txt','a');
            fwrite($file, "$articleName, $articleAdresse, $articleProduit, $articlePrice\n");
            fclose($file);
            echo 'La commande a été enregistrée avec succes !<br>';
            
            // Création d'un repertoire Article
            if(!is_dir('Articles')){
                mkdir('Articles');
            }
            // Copy du fichier dans le repertoire
            copy('Commande.txt', 'Articles/Commandes_backup.txt');
            echo 'La commande a été sauvegardée !<br>';
        }
    }

    // la lecture des commandes à partir du fichier de stockage 
    $file = fopen('Commande.txt', 'r');

    while(!feof($file)){
        $line = fgets( $file);
        echo $line."<br>";
    }
    fclose($file);
    
    
    







?>
