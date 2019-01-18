<?php


//    ajouter une todo a une todolist
if (isset($_POST['id_note_for_todo'])) {
  foreach ($_POST as $key => $value) {
    echo $key . ' / ' . $value . '<br />';
  }
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

foreach ($_POST as $key => $value) {
  echo $key . ' / ' . $value . '<br />';
}




/*header('location:index.php');*/
 ?>
