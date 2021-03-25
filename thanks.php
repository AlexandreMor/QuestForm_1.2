<?php

if (!empty($_POST["user_name"]) && filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL) && !empty($_POST["user_firstname"]) && !empty($_POST["user_tel"]) && !empty($_POST["user_message"]) && !empty($_POST["user_subject"])) {?>

<p>Merci <?php echo $_POST['user_firstname'] ?> <?php echo $_POST['user_name'] ?> de nous avoir contacté à propos de “<?php echo $_POST['user_subject'] ?>”.

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_tel'] ?> dans les plus brefs délais pour traiter votre demande :<br> 

<?php echo $_POST['user_message']; } ?></p>

 <?php if (empty($_POST["user_name"])) {
    echo "Votre nom est requis \n";
  } 
  if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
    echo "Une adresse email valide est requise \n";
  } 
  if (empty($_POST["user_firstname"])) {
    echo "Votre prénom est requis \n";
  } 
  if (empty($_POST["user_tel"])) {
    echo "Votre numéro de téléphone est requis \n";
  } 
  if (empty($_POST["user_message"])) {
    echo "Vous devez rédiger un message \n";
  } 
  if (empty($_POST["user_subject"])) {
    echo "Sélectionnez un sujet \n";
  } 
?>