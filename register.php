<?php require 'inc/header.php'; ?>

<?php
if (!empty($_Post)) {

$errors = array();

if (empty($_Post['username']) || !preg_match('/^[a-z0-9_]+$/', $_Post['username'])) {

	$errors['username']="Vous n'avez pas entrez de pseudo";
}

if (empty$_Post['email']) || !filter_var($_Post['email'], FILTER_VALIDATE_EMAIL)) {
	$errors['email']="Votre email n'est pas valide";
}




}
	debug($errors);

?>
 <h1> S'inscrire</h1>

 <form action="" method="POST">
 	 <label for="username">pseudo</label>
 	 <input type="text" name="username" id="username" class="form-control" ><br>
 	
 	 <label for="email">Email</label>
 	 <input type="text" name="email" id="email" class="form-control" ><br>

 	 <label for="password">mot de pass</label>
 	 <input type="password" name="password" id="password" class="form-control" ><br>

 	 <label for="confirmPasswor">confirmez le mot de passe</label>
 	 <input type="password" name="confirmPasswor" id="confirmPasswor" class="form-control" ><br>
 	 <button type="submit" class="btn btn-primary">S'INSCRIRE</button>
 </form>



<?php require 'inc/footer.php'; ?>
