<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>


<ul>
    <?php
    $sql= "SELECT * FROM Tâches ORDER BY Tâche ASC";
    $requete= $bdd->prepare($sql);
    $requete->execute();
    foreach ($requete as $Tâche){
        echo "<li>";
        echo $Tâches["Tâche"];
        echo "</li>";
    }
    ?>

</ul>
<form action="ajoutaches.php" method="post">
    categorie:
    <input type="text" name="nomtâche">
    <input type="submit" value="ajouter" name="tâcheajouter">

</form>

</body>


</html>