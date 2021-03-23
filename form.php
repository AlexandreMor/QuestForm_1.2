<form  action="thanks.php"  method="post">
<?php $subjectsList=['A propos de la commande','A propos de la livraison','A propos du remboursement'];
?>

<div>

  <label  for="subject">Sujet :</label>

  <select  name="user_subject"  id="subject">
  <?php foreach ($subjectsList as $subject){ ?>
<option value="<?php echo $subject ?>"><?php echo $subject ?></option>
  <?php } ?>
/<select>

</div>
<div>

  <label  for="nom">Nom :</label>

  <input  type="text"  id="nom"  name="user_name">

</div>

<div>

  <label  for="prénom">Prénom :</label>

  <input  type="text"  id="prénom"  name="user_firstname">

</div>


<div>

  <label  for="courriel">Courriel :</label>

    <input  type="email"  id="courriel"  name="user_email">

</div>

<div>

  <label  for="téléphone">Téléphone:</label>

    <input  type="tel"  id="téléphone"  name="user_tel"
    pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">

</div>

<div>

  <label  for="message">Message :</label>

  <textarea  id="message"  name="user_message"></textarea>

</div>

<div  class="button">

  <button  type="submit">Envoyer votre message</button>

</div>

</form>