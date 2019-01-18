<?php
//lister le contenu et faire une boucle qui appelle 1 note avec ses todo correspondant.
include('include/login_bdd.php');

function todoStatut(){//fonction passer en paramètre statut : 0 = non check  1 = check
  include('include/login_bdd.php');
  $req = $bdd->query('SELECT * FROM note WHERE id>0 ');
  while ($note = $req->fetch()) {//note + todo
    $checkOk = new Form();
    $checkOk->surround = 'em';

    ?>
    <form action="post.php" method="post">
      <!--  envoie l'id de la note a checked -->
      <?php echo $checkOk->inputHide('id_note_for_checked', $note['id']); ?>
      <ul>
        <li>
          <h2><input type="checkbox" name="statut" value= 1  <?php echo $checked = ($note['statut'] == 1)? 'checked': null; ?>/>
          <?php echo htmlspecialchars($note['titre_note']); echo $checkOk->submit('check ok');?></h2>
        </li>
    <?php

          //parcour tout les todo correspondant à la note ci dessus
              $req_todo = $bdd->prepare('SELECT * FROM todo WHERE id_note=:id_ok');
              $req_todo->execute(array('id_ok' => $note['id']));
              while ($todo = $req_todo->fetch()) {// todo
        ?>
          <ul>
            <!--     envoie l'id de la todo a checked-->
            <?php echo $checkOk->inputHide('id_todo_for_checked', $todo['id']); ?>
            <li>
              <h3><input type="checkbox" name="statut" value = 1/ <?php echo $checked = ($todo['statut'] == 1)? 'checked': null; ?>>
                <?php echo htmlspecialchars($todo['todo']); echo $checkOk->submit('check ok');?></h3>
              </li>
          </ul>
        </ul>
      </form>
  <?php
  include('include/nav_liste.php');
  (isset($_GET['idNote']) && $_GET['idNote'] == $note['id'] && !isset($_GET['newTodo']))? include('include/form_todo.php') : null;
  (isset($_GET['idNote']) && $_GET['idNote'] == $note['id'] && $_GET['newTodo'] == 1)? include('include/form_ajout_todo.php') : null;
    }//todo
   ?>
  <div>
    <?php (isset($_GET['idNote']) && $_GET['idNote'] == $note['id'] && !isset($_GET['newTodo']))? include('include/form_todo.php') : null; ?>
  </div>
   <?php
  }//box note + todo
}//fonction passer en paramètre statut : 0 = non check  1 = check

todoStatut();


?>
