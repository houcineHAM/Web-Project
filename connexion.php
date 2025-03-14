<?php

try{
   $dsn = 'mysql:host=localhost;dbname=automobile';
   $user = 'root';
   $password = '';
   $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
   
   $pdo = new PDO($dsn, $user, $password, $options);
 }catch(Exception $e){
   die("Erreur de connexion à la base de données<br>".$e->getMessage());
 }        

?>