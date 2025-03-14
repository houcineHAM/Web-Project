
<html>
<link rel="stylesheet" href="style.css">
    <body>
    <center>
   <form action="" method="POST">
   <fieldset>
    <legend>Ajoutez une annonce </legend>
    <input type="texte" name="type" placeholder="Type"><br><br>
    <input type="texte" name="ntel" placeholder="Numéro de Télephone"><br><br>
    <textarea name="description" placeholder="Donnez une description pour votre annonce"></textarea><br><br>
    </fieldset>
    <input type="submit" name="publier" value="Publier">
    [<a href="deconnexion.php">Se déconnecter</a>]
    [<a href="accueil.php">Accueil</a>]
    </form> 
    </center>
<?php
session_start();
if($_SESSION["autoriser"]!=true){
    header("location:login.php");
    exit();
    }
include("connexion.php");
@$user=$_SESSION["user"];
@$typ=$_POST['type'];
@$des=$_POST['description'];
@$tel=$_POST['ntel'];
@$pub=$_POST['publier'];

if(isset($pub)&& !empty($typ) && !empty($des) && !empty($tel)){

$sql = "INSERT INTO annonces VALUES (NULL, '$user', '$typ', '$des', '$tel')";
$requeteSQL = $pdo->query($sql);
echo "<br><br> Votre annonce a été publiée avec succès !";

} 
else echo "<br><br> Veuillez remplir tous les champs !";

?>
</body>
    </html>
      
 