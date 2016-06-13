<?php
include "config.php";
if (isset($_POST["tâcheajouter"]))
{
    $nomtâche=$_POST["nomtâche"];
    $sql="INSERT INTO Tâches (Categorie) values ('$nomtâche')";

    $requete=$bdd->prepare($sql);
    $requete->execute();
    echo "tâcheajouter";

}
?>
