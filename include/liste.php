<?php
//lister le contenu et faire une boucle qui appelle 1 note avec ses todo correspondant.
include('include/login_bdd.php');

function todoStatut($statut){//fonction passer en paramètre statut : 0 = non check  1 = check
  include('include/login_bdd.php');
  $req = $bdd->prepare('SELECT * FROM note WHERE id>0 and statut=:statut');
  $req->execute(array('statut' => $statut));
  while ($note = $req->fetch()) {//note + todo
    ?>
    <form action="#" method="post">
      <ul>
        <li><h2><input type="checkbox" name="titre" value="titre" /><?php echo $note['titre_note']; ?></h2></li>
    <?php
          //parcour tout les todo corresspondant à la note ci dessus
              $req_todo = $bdd->prepare('SELECT * FROM todo WHERE id_note=:id_ok');
              $req_todo->execute(array('id_ok' => $note['id']));
              while ($todo = $req_todo->fetch()) {// todo
        ?>
          <ul>
            <li> <h3><input type="checkbox" name="todo" /><?php echo $todo['todo']; ?></h3> </li>
          </ul>
        </ul>
      </form>
  <?php
  include('include/form_todo.php');
    }//todo
   ?>
  <div>
    <?php include('include/form_todo.php'); ?>
  </div>
   <?php
  }//box note + todo
}//fonction passer en paramètre statut : 0 = non check  1 = check
todoStatut(0);
todoStatut(1);

?>
