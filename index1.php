
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="formPhp">
        <form action="index1.php" method="post">
            <select name="sel">
                <option value="monsieur">Monsieur</option>
                <option value="madame">madame</option>
            </select>
            <input type="text" name="nom" placeholder="votre Nom">
            <input type="text" name="prenom" placeholder="votre prenom">
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <?php
    if(isset($_POST["sel"], $_POST["nom"], $_POST["prenom"])){
        echo "Bonjour ".$_POST["sel"]."<br>";
        echo $_POST["nom"]." ".$_POST["prenom"]."<br>";
    }
    
    ?>

</body>
</html>
