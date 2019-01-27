<?php session_start();
  require 'class/Formulaire.php';
  /*require 'class/Todo.php';*/
  page(1);
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
          <?php todoStatut(2, $_SESSION['page']); ?>
        </div>
        <div id="listeAFaire">
          <?php todoStatut(1, $_SESSION['page']);?>
        </div>
        <div id = "ajout">
          <?php include('include/ajout.php'); ?>
        </div>
    </section>
    <section>
      <div id = "dom">

      </div>
      <div>  <!--test pagination-->
        <?php
        //dev a mettre dans un include rajouter un paramètre de statut pour les truck fait !
        //ajouter le choix de l'ordre des todo dans la fonction liste 
        function page($statut){
          $i=0;
          include('include/login_bdd.php');
          $req = $bdd->prepare('SELECT * FROM note WHERE id>0 and statut=:statut ORDER BY id DESC');
          $req->execute(array(
            'statut' => $statut
          ));
          while ($page = $req->fetch()) {
            $i_div = $i%2;
            echo ($i_div == 0)? '<a href="index.php?page=' . $i . '">page ' . $i . '</a>' : null;
            $i++;
          }
        }



         ?>
      </div>
    </section>
    <script src="js/app.js"></script>
  </body>
</html>
