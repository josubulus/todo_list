<?php session_start();
  require 'class/Formulaire.php';
  /*require 'class/Todo.php';*/

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr" />
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Todo list</title>
  </head>
  <body>
    <header>
      <h1>Todo list </h1>
      <nav>
        <div class="nav">
          <?php include('include/nav.php'); ?>
        </div>
      </nav>
    </header>
    <section><!--    tout les contenu stocké en js    -->
      <?php include('include/liste.php') //fonction (todoStatut) d'affichage de la liste ?>
        <div id = "listeFait">
          <?php todoStatut(2); ?>
        </div>
        <div id="listeAFaire">
          <?php todoStatut(1); ?>
        </div>
        <div id = "ajout">
          <?php include('include/ajout.php'); ?>
        </div>
    </section>
    <section>
      <div id = "dom">

      </div>
    </section>
    <script src="js/app.js"></script>
  </body>
</html>
