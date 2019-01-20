<?php
include('include/login_bdd.php');

//    ajouter une todo a une todolist
if (isset($_POST['id_note_for_todo'])) {
  /*
  todo / sdldze;erld
  id_note_for_todo / 1
  button /
  todo / sdldze;erld
  id_note_for_todo / 1
  button /
  */
  $req = $bdd->prepare('INSERT INTO todo(todo, date_todo, statut, id_note) VALUES (:todo, now(), 0, :id_note)');
  $req->execute(array(
    'todo' => $_POST['todo'],
    'id_note' => $_POST['id_note_for_todo']
  ));

}

//                     checked note et todo :
        //checked note
          if (isset($_POST['id_note_for_checked']) && isset($_POST['note'])) {
            /*
            id_note_for_checked / 1
            id_todo_for_checked / 13
            statut / 1
            button /
            */

          $req = $bdd->prepare('UPDATE note SET statut=:statut WHERE id=:id_note ');
          $req->execute(array(
            'statut' => (!isset($_POST['statut']))? 1 : $_POST['statut'],
            'id_note' => $_POST['id_note_for_checked']
          ));

        // checked todo
          }
          if (isset($_POST['id_todo_for_checked']) && isset($_POST['todo'])){
          $req = $bdd->prepare('UPDATE todo SET statut=:statut WHERE id=:id_note ');
            $req->execute(array(
              'statut' => (!isset($_POST['statut']))? 1 : $_POST['statut'],
              'id_note' => $_POST['id_todo_for_checked']
            ));

          }







// ajouter une note et une première todo
if (isset($_POST['ajout'])) {
  /*
  titre_note / qsdsqd
  todo / qsdsqd
  ajout / 1
  */
  $req = $bdd->prepare('INSERT INTO note(titre_note, date_note, statut) VALUES (:titre, now(), 1)');
  $req->execute(array(
    'titre' => $_POST['titre_note']
  ));

}

//update d'une todo
/*
todo / choses a faire
id_todo_for_update / 7
button /
*/

/*
titre_note / première note
id_note_for_update / 1
button /
*/
if (isset($_POST['id_note_for_update']) || isset($_POST['id_todo_for_update'])) {
  foreach ($_POST as $key => $value) {
    echo $key . ' / ' . $value . '<br />';
  }

}




header('location:index.php');
 ?>
