<?php
try
  {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=todo_list;charset=utf8','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
 ?>
