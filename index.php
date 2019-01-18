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
        <?php include('include/nav.php'); ?>
      </nav>
    </header>
    <section><!--    tout les contenu stocké en js    -->
        <div id = "liste">
          <?php include ('include/liste.php') ?>
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
