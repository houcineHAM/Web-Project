<?php
  include("connexion.php");
  session_start();
  @$auto=$_SESSION["autoriser"];
   if($auto!=true){
      header("location:login.php");
      exit();
   }
   else {
$bienvenue="Bienvenue ". $_SESSION["user"].  " sur le site AutomobileDz";
?>
<html>
   <head>
      <meta charset="utf-8"/>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
   <center><h3><?php echo $bienvenue ?></h3><br><br>
    <form action="" method="GET">
    <fieldset>
    <legend>Lancez votre recherche</legend>
    <center>
    <input id="rechercheInput" type="texte" name="modele" placeholder="Modèle à rechercher"/>
    <input type="submit" name="rechercher" value="Rechercher">
    </center>
      </fieldset>
   </form> <br>
   [<a href="ajouter.php">Ajouter une annonce</a> ]
   [<a href="supprimer.php">Supprimer une annonce</a>]
   [<a href="deconnexion.php">Se déconnecter</a>] <br><br>
   
   <?php 
   if(isset($_GET['rechercher'])&& isset($_GET['modele'])){
   $auto=$_GET['modele'];
   $requeteSQL = $pdo->query("SELECT * FROM annonces WHERE modele ='$auto'");
   if ($requeteSQL->rowCount()>0) {
   echo "<table border=1>";
   echo"<br>";
   echo "<tr><th>Num</th><th>Utilisateur</th><th>Modèle</th><th>Description</th><th>Num Tél</th></tr>";
   while ($data = $requeteSQL->fetch(PDO::FETCH_OBJ)){
   echo "<tr>\n";
   foreach ($data as $key => $value) 
   echo " <td>".$value." </td> ";
   echo "</tr>";}
   echo "</table>";
   }
      else {
      echo "<br><br> Aucun résultat trouvé pour:".$auto;  }
   }} ?>
</body>
</html>


   