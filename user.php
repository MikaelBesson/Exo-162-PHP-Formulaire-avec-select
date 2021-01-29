<?php
if(isset($_GET["nom"], $_GET["prenom"])){
    echo "nom :" . $_GET["nom"]."<br>";
    echo "prenom :" . $_GET["prenom"]."<br>";
}
else {
    echo " il n'y as pas de valeur dans l'input";
}

echo "<br><br>";

if(isset($_POST["nom"], $_POST["prenom"])){
    echo "nom :" . $_POST["nom"]."<br>";
    echo "prenom :" . $_POST["prenom"]."<br>";
}
else {
    echo " il n'y as pas de valeur dans l'input";
}