<?php
if (!empty($todo)) {
  $form_update_todo = new Form($todo);
  $form_update_todo->surround = 'em';
  ?>
  <form action="post.php" method="post">
   <?php
   echo $form_update_todo->input('todo', 'A faire :');
   echo $form_update_todo->inputHide('id_todo_for_update', $todo['id']);
   echo $form_update_todo->submit('mettre à jour');
    ?>
  </form>
  <?php
} else {
  $form_update = new Form($note);
  $form_update->surround = 'em';
  ?>
  <form action="post.php" method="post">
    <?php
      echo $form_update->input('titre_note', 'Titre Note');
      echo $form_update->inputHide('id_note_for_update', $note['id']);
      echo $form_update->submit('mettre à jour');
      ?>
  </form>
  <?php
}
 ?>
