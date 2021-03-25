<form  action="thanks.php" method="POST">
<?php $subjectsList=['A propos de la commande','A propos de la livraison','A propos du remboursement'];
?>

<div>

  <label  for="subject">Sujet :</label>

  <select  name="user_subject" required  id="subject">
  <?php foreach ($subjectsList as $subject){ ?>
<option value="<?php echo $subject ?>"><?php echo $subject ?></option>
  <?php } ?>
/<select>

</div>
<div>

  <label  for="nom">Nom :</label>

  <input  type="text" required id="nom"  name="user_name">

</div>

<div>

  <label  for="prénom">Prénom :</label>

  <input  type="text" required id="prénom"  name="user_firstname">

</div>


<div>

  <label  for="courriel">Courriel :</label>

    <input  type="email" required  id="courriel"  name="user_email"
    pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$">

</div>

<div>

  <label  for="téléphone">Téléphone:</label>

    <input  type="tel" required  id="téléphone"  name="user_tel"
    pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">

</div>

<div>

  <label  for="message">Message :</label>

  <textarea  id="message" required  name="user_message"></textarea>

</div>

<div  class="button">

  <button  type="submit">Envoyer votre message</button>

</div>

</form>