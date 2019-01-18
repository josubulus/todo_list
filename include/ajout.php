<h2>ici formulaire d'ajout d'une note.</h2>
<div >
  <?php $ajout = new Form ();
  // passer en paramètre le tableau contenant le contenu de la table   ?>
  <form action="post.php" method="post" >
    <?php
        echo $ajout->input('titre_note','titre Todo lise');
        echo $ajout->textarea('todo', 'A faire');
        echo $ajout->inputHide('ajout', 1);
        echo $ajout->submit('creer');
        /*faire une profondeur de 2 genre titre puis une liste de tache et des note présenter sous
        forme de blocks contenant tout ces évènements*/
     ?>
  </form>
</div>
