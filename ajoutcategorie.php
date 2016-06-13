<?php
include "config.php";
if (isset($_POST["categorieajouter"])) {
    $nomcategorie = $_POST["nomcategorie"];
    $sql = "INSERT INTO Categories (Categorie) values ('$nomcategorie')";

    $requete = $bdd->prepare($sql);
    $requete->execute();
    echo "categorieajouter";

}
?>


<a href="index.php">Retour à l'index</a>
