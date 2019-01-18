<?php
$form_update_todo = new Form(); ?>
<form action="post.php" method="post">
 <?php
 echo $form_update_todo->input('todo', 'A faire :');
 echo $form_update_todo->inputHide('id_note_for_todo', $note['id']);
 echo $form_update_todo->submit('ajouter');
  ?>
</form>
