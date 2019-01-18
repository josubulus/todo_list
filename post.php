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


  /*foreach ($_POST as $key => $value) {
    echo $key . ' / ' . $value . '<br />';
  }*/
}

//    checked note et todo a différencier en fonction de l'index post id
//   faire une condition pour renseigner la valeur statut null = 0
if (isset($_POST['id_note_for_checked']) || $_POST['id_todo_for_checked']) {
  foreach ($_POST as $key => $value) {
    echo $key . ' / ' . $value . '<br />';
  }
}

// ajouter une note et une première todo
if (isset($_POST['ajout'])) {
  foreach ($_POST as $key => $value) {
    echo $key . ' / ' . $value . '<br />';
  }
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
