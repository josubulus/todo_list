<?php
/**
 @class : connection , création est controles des memebres
 */
class Membre
{
  private $error = [];
  private $userData;



/**
@method login paramètres formulaire post
*/
    public function login($userLogin){
                  include('include/login_bdd.php');
                  $req=$bdd->prepare('SELECT * FROM membres WHERE pseudo=:pseudo');
                  $req->execute(array('pseudo'=>$userLogin['login_pseudo']));
                  $login=$req->fetch();


              if ($login['pseudo'] == $userLogin['login_pseudo']){//tchek pseudo //

                      if (password_verify($userLogin['login_pass'],$login['pass'])) {//tchek mdp
                        $this->userData['page']="login_ok";
                        $this->userData['id_membre']=$login['id'];
                        $this->userData['pseudo_membre']=$login['pseudo'];

                      }//tchek mdp
                      else {
                          $this->error['post_retour']='mdp erroné';
                      }

              }//tchek pseudo
              else {
                 $this->error['post_retour']='pseudo erroné' ;
              }
    }
/**
@get erreur
*/
                public function getError(){
                	      return $this->error;
                	    }
/**
@get user data
*/
                public function getUserData(){
                  return $this->userData;
                }

/**
@method traitement des erreurs login
*/
                public function error(){
                  if (isset($this->error['post_retour'])) {
                                switch ($this->error['post_retour']) {
                                  case 'mdp erroné':
                                    return "Le mot de passe est erroné";
                                    break;
                                  case 'pseudo erroné':
                                      return "Le pseudo n'existe pas ";
                                    break;

                                  default:
                                    return "";
                                    break;
                                }
                    }else {
                    return null;
                  }
                }



}//fermeture class

 ?>
