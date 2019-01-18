<?php
/**
@class creer des formulaires.
*/
class Form{


  public $surround='p';
  public $data;

 public function __construct($data = array()){
   $this->data=$data;
 }
                    //méthodes interne a l'instance
/**
@method sert a entourer les formulaire avec un tag surround accessible depuis l'extèrieur
*/
  public function surround($html){
    return "<{$this->surround}>{$html}</{$this->surround}>";
  }




  /**
  @method interne a l'instance pour maintenanir les données dans les champs de saisie
  *sur la vue : $objet = new Form($_POST) avant la balise form
  */
  private function getValue($index){
    if (isset($this->data[$index])) {//attention rajout de [$index] non testé.
      return $this->data[$index];
    }
    else {
      return null;
    }
  }


    //functions de l'instance :
/**
@method appeler un input password
@parameters : string nom form puis label form
*/
    public function pass($name,$label){
    return $this->surround('
  <label for="'.$name.'">' .$label. '</label><br />
  <input type="password" name="'.$name.'"  required />
  ');
  }
/**
@method appeler un input text
@parameters : string nom form puis label form
*/
  public function input($name,$label){
  return $this->surround('
<label for="'.$name.'">' .$label. '</label><br />
<input type="text" name="'.$name.'" value="'.$this->getValue($name).'" required />
');
}
/**
@method appeler un input text
@parameters : string nom form puis value form transmettre des données caché
*/
  public function inputHide($name,$value){
  return $this->surround('
<input style="display:none;" type="text" name="'.$name.'" value="'.$value.'" />
');
}

/**
@method appeler un input mail
@parameters : string nom form puis label form
*/

public function mail($name,$label){
return $this->surround('
<label for="'.$name.'">' .$label. '</label><br />
<input type="mail" name="'.$name.'" value="'.$this->getValue($name).'" required />
');
}
/**
@method textarea
@parameters : string nom form puis label form
*/

public function textarea($name,$label){
  return $this->surround('
      <label for="'.$name.'">' .$label. '</label><br />
      <textarea name="'.$name.'" rows="5" cols="60">'.$this->getValue($name).'</textarea>

  ');
}

/**
@method
@parameters $name nom du form, $label titre du form
$contenu array key value du option value nom du option
$selected (FACULTATIF) valeur de l'option qui doit être selected
$label (FACULTATIF) titre du form
*/
public function select($name,  $contenu,$selected = null ,$label = null){
    if (isset($label)) {
      ?> <p><label for="<?php echo $name; ?>"><?php echo $label; ?></label></p> <?php
    }?>
    <select name="<?php echo $name; ?>">
      <?php foreach ($contenu as $key => $value) {?>
          <option value="<?php echo $key; ?>"
            <?php if (isset($selected) && !empty($selected) && $selected == $key) {
              $selected = 'selected';
              echo $selected;
            } ?>
            ><?php echo $value; ?></option>
        <?php
      } ?>
    </select>
  <?php

  /*foreach ($contenu as $key => $value) {
    echo $key . ' / ' . $value . '<br />';
  }*/
}



/**
@method appeler un bouton de validation
*/

 public function submit($value){
   return $this->surround('<button type="submit" name="button">' . $value . '</button>');
 }


}
 ?>
