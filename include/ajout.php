<h2>ici formulaire d'ajout d'une note.</h2>
<div >
  <?php $ajout = new Form ();
  // passer en paramètre le tableau contenant le contenu de la table   ?>
  <form action="#" method="post">
    <?php
        echo $ajout->input('titre','titre de l\'évènement');
        echo $ajout->textarea('description', 'description');
        /*faire une profondeur de 2 genre titre puis une liste de tache et des note présenter sous
        forme de blocks contenant tout ces évènements*/
     ?>
  </form>
</div>
