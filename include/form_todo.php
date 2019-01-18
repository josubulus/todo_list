<?php
if (!empty($todo)) {
  $form_update_todo = new Form($todo); ?>
  <form action="#" method="post">
   <?php
   echo $form_update_todo->input('todo', 'A faire :');
   echo $form_update_todo->submit('mettre à jour');
    ?>
  </form>
  <?php
}else {
  $form_update = new Form($note); ?>
  <form action="#" method="post">
    <?php
      echo $form_update->input('titre_note', 'Titre Note');
      echo $form_update->submit('mettre à jour');
      ?>
  </form>
  <?php
}
 ?>
