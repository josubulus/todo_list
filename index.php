<?php session_start();
  require 'class/Formulaire.php';
  /*require 'class/Todo.php';*/
  include('include/page_function.php');

  $_SESSION['page'] = $_GET['page'];// stoque le num page pour header post et garder la page mem quand modif

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
      <h1 class="titre">Todo list </h1>
      <nav>
        <div class="nav">
          <?php include('include/nav.php'); ?>
        </div>
      </nav>
    </header>
    <section><!--    tout les contenu stocké en js    -->
      <?php include('include/liste.php') //fonction (todoStatut) d'affichage de la liste ?>
        <div id = "listeFait">
          <?php
          //js rest le dom quand click sur page trouver une astuce 
          page(2);
           todoStatut(2, $_SESSION['page']);
          ?>
        </div>
        <div id="listeAFaire">
          <?php
          page(1);
          todoStatut(1, $_SESSION['page']);
          ?>
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
