<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>


<ul>
<?php
$sql= "SELECT * FROM Categories ORDER BY Categorie ASC";
$requete= $bdd->prepare($sql);
$requete->execute();
foreach ($requete as $categorie){
    echo "<li>";
    echo $categorie["Categorie"];
    echo "</li>";
}
?>

</ul>
<form action="ajoutcategorie.php" method="post">
    categorie:
    <input type="text" name="nomcategorie">
    <input type="submit" value="ajouter" name="categorieajouter">

</form>

</body>


</html>