<html>
<link rel="stylesheet" href="style.css">
    <body>
<center>
   <form action="" method="GET">
   <fieldset>
   <legend>Supprimez une annonce</legend>
   <input type="number" name="id" placeholder="Identifiant">
   <input type="submit" name="supp" value="Supprimer"><br><br>
   [ <a href="deconnexion.php">Se déconnecter</a> ]
   [ <a href="accueil.php">Accueil</a> ]
   </form>
</center> 
</body>
</html>
      
<?php
include("connexion.php");
session_start();
@$user=$_SESSION["user"];
@$auto=$_SESSION["autoriser"];
if($auto!=true){
    echo "<a href='login.php'>"."Authentifier"."</a>";
    exit();
}
else {
    @$id=$_GET['id'];
    @$sup=$_GET['supp'];
    if ($user == "admin") {
            if (!empty($id)) {
            // Vérifier si l'ID existe dans la base de données
            $checkID = $pdo->query("SELECT id FROM annonces WHERE id = ".$id);

            if ($checkID->rowCount() > 0) {
                $deleteQuery = $pdo->query("DELETE FROM annonces WHERE id = ".$id);
                echo "<br><br> L'annonce numéro: " . $id . " a été supprimée avec succès !";
            } else {
                echo "<br><br> L'annonce numéro: " . $id . " n'existe pas dans la base de données.";
            }
        } 
    } else {
        echo "<br><br> Vous ne pouvez pas effectuer cette action!";
        exit();
    }
}
?>
