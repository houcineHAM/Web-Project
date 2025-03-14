<?php
   include("connexion.php");
   session_start();
   @$login=$_POST["login"];
   @$pass=md5($_POST["pass"]);
   @$valider=$_POST["valider"];
   $erreur="";

   if(isset($valider)){
      $sql = "SELECT * FROM utilisateurs WHERE login = '$login' AND pass = '$pass'";
      $sel = $pdo->query($sql);
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["user"]=$tab[0]["login"];
         $_SESSION["autoriser"]=true;
         header("location:accueil.php");
      }
      else
      $erreur="Mauvais login ou mot de passe!";
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css">
         
   </head>
   <body onLoad="document.f1.login.focus()">
      
      
      <center>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="f1" method="POST" action="">
      <fieldset>
      <legend>Authentification</legend>
         <input type="text" name="login" placeholder="Login"/><br><br>
         <input type="password" name="pass" placeholder="Mot de passe"/><br><br>
      </fieldset>
         <input type="submit" name="valider" value="S'authentifier"/>
         [<a href="inscription.php">Créer un compte</a> ] 
      </form>
</center>
   </body>
</html>