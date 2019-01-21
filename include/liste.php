<?php
//lister le contenu et faire une boucle qui appelle 1 note avec ses todo correspondant.
include('include/login_bdd.php');

function todoStatut(){//fonction pour l'instant pas de paramètres
  include('include/login_bdd.php');
  $req = $bdd->query('SELECT * FROM note WHERE id>0 ORDER BY id DESC');
  while ($note = $req->fetch()) {//note + todo
    $checkOk = new Form();
    $checkOk->surround = 'em';

    ?>
    <form action="post.php" method="post"><!-- ouverture form case a cocher -->
      <!--  envoie l'id de la note a checked -->
      <?php echo $checkOk->inputHide('id_note_for_checked', $note['id']); ?>
      <ul>
        <li>
          <p><input type="checkbox" name="statut" value= 2  <?php echo $checked = ($note['statut'] == 2)? 'checked': null; ?> />
          <?php
          echo htmlspecialchars($note['titre_note']);
          echo $checkOk->submit('ok', 'note');
          ?> <a href="suppr.php?note=<?php echo $note['id']; ?>&amp;titre=<?php echo $note['titre_note']; ?>">suppr</a> <?php
          include('include/nav_liste.php');
          ?>
          </p>
        </li>
      </form>

                <ul> <!--sous liste pour les todo a réalisé-->
                  <?php

                      //parcour tout les todo correspondant à la note ci dessus
                          $req_todo = $bdd->prepare('SELECT * FROM todo WHERE id_note=:id_ok  ORDER BY id DESC');
                          $req_todo->execute(array('id_ok' => $note['id']));
                          while ($todo = $req_todo->fetch()) {// todo
                    ?>
                        <li>
                          <div class ="boxTodo">
                            <form action="post.php" method="post">
                            <p><input type="checkbox" name="statut" value = 2 <?php echo $checked = ($todo['statut'] == 2)? 'checked': null; ?> />
                              <!--     envoie l'id de la todo a checked-->
                              <?php echo $checkOk->inputHide('id_todo_for_checked', $todo['id']);?>
                              <?php
                              echo htmlspecialchars($todo['todo']);
                                echo $checkOk->submit('ok', 'todo');
                                ?> <a href="suppr.php?todo=<?php echo $todo['id']; ?>&amp;titre=<?php echo $todo['todo']; ?>">suppr</a> <?php
                                ?>
                              </p>
                            </form>
                          </div>
                          </li>


       <!--fermeture form de  case a cocher -->
              <?php
              (isset($_GET['idNote']) && $_GET['idNote'] == $note['id'] && !isset($_GET['newTodo']))? include('include/form_todo.php') : null;
                }//todo
              ?>
              </ul><!-- todo fermeture-->

      </ul><!-- note fermeture -->
<?php  ?>
  <div>
    <?php
    (isset($_GET['idNote']) && $_GET['idNote'] == $note['id'] && $_GET['newTodo'] == 1)? include('include/form_ajout_todo.php') : null;
    (isset($_GET['idNote']) && $_GET['idNote'] == $note['id'] && !isset($_GET['newTodo']))? include('include/form_todo.php') : null;
    ?>
  </div>
   <?php
  }//box note + todo
}//fonction passer en paramètre statut : 0 = non check  1 = check

todoStatut();


?>
