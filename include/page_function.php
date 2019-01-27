
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
