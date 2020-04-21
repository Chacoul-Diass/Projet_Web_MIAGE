<?php
  try{
      $bdd = new PDO('mysql:host=localhost; dbname=grh; charset=utf8', 'root', '');
  }  

  catch(Exception $e){
      die('Erreur : '. $e->getMessage());
  }
?>
