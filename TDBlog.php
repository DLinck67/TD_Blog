
<!doctype htlm>
<html lang="fr">
<?php
	date_default_timezone_set('Europe/Paris');
	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');
	$heure = date('H');
	$minute = date('i');
?>


<head>
	<meta charset="utf-8">
	<title>Mon Blog</title>
	<link rel="stylesheet" type="text/css" href="CSSBlog.css">
	<script type="script.js"></script>
</head>

	<body>
		<form action="#" method="POST"> 
	<p>
		<h1 id="titre_principale">Mon Blog</h1>
		<br/>
		<br/>
		<h2 id="titre_message">Message</h2>
		
		<label for="Pseudo">Pseudo : 
						 <?php
						 	if (isset($_POST['Pseudo :'])){
						 		echo ''.htmlspecialchars($_POST['Pseudo']);
						 	}
						 ?>
		<br/>
		
		<label for="Titre">Titre :
		 				<?php
						 	if (isset($_POST['Titre :'])){
						 		echo ''.htmlspecialchars($_POST['Titre']);
						 	}
						 ?>
		<br/> 
		
		<label for="Date">
		 				 <?php
						 	echo'Date : ' .$jour .'/' .$mois .'/' .$annee .' ';
						 ?>
		<br/>
		
		<label for="Message">Message :
		 				<?php
						 	if (isset($_POST['Message :'])){
						 		echo ''.htmlspecialchars($_POST['Message']);
						 	}
						 ?>
						 
		<br/>
		<br/>
		<br/>
		<br/>

	</p>
	</form>
	</body>
	<form action="#" method="POST"> 
	<footer>
		<div id=trait></div>
		<br/>
		<h2 id="titre">Formulaire</h2>
		 <label for="Pseudo">Pseudo : </label></label><textarea name="Pseudo"></textarea>
		<br/>
		 <label for="Titre">Titre : </label></label><textarea name="Titre"></textarea>
		<br/>
		 <label for="Message">Message : </label><textarea name="Message"></textarea>
		<br/>
		<br/>
		 <label for="Date">
							<?php
							echo'Date :' .$jour .'/' .$mois .'/' .$annee .' ';
							?>
		<br/>
		<br/>
		 <input id=Valider type="submit" value="Valider">
	</footer>
	</form>

