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

      </nav>
      <section>
          <div>
            <?php include ('include/liste.php') ?>
          </div>
          <div>
            <?php include('include/ajout.php'); ?>
          </div>
      </section>
    </header>
  </body>
</html>
