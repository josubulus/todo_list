<h1>êtes-vous sûr de vouloir supprimer : <?php echo htmlspecialchars($_GET['titre']) ?></h1>
<form action="post.php" method="post">
  <?php
function formSuppr($leGet, $truckasuppr){
  require 'class/Formulaire.php';
  $supprForm = new Form();
  echo $supprForm->inputHide('suppr', $truckasuppr);
  echo $supprForm->inputHide('id', $leGet);
  echo $supprForm->submit('oui', 'oui');
  echo $supprForm->submit('non', 'non');
}
if (isset($_GET['note']) && isset($_GET['titre'])) {
  formSuppr(intval($_GET['note']), 'note');
}
elseif (isset($_GET['todo']) && isset($_GET['titre'])) {
  formSuppr(intval($_GET['todo']), 'todo');
}
else {
  header('location:index.php');
}


   ?>
</form>
<?php
/*foreach ($_POST as $key => $value) {
  echo $key . ' / ' . $value . '<br />';
}*/
 ?>
