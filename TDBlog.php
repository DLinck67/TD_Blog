
<!DOCTYPE htlm>
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
	<link rel="stylesheet" href="CSSBlog.css">
	<script type="script.js"></script>
</head>

	<body>
	<header>
		<div id=trait></div>
		<center>
		<h1 id="titre_principale"> Mon Blog </h1>
                <?php
                    
                    if (isset($_POST['Pseudo']) and isset($_POST['Titre']) and isset($_POST['Message']) and !empty($_POST['Pseudo']) and !empty($_POST['Titre']) and !empty($_POST['Message']))
					{
                        $f = fopen("blog.txt", "a+"); 
                        fputs($f,'<p>Pseudo: '.htmlspecialchars($_POST["Pseudo"]).'<br>Titre: '.htmlspecialchars($_POST["Titre"]).
                              '<br>Message: '.htmlspecialchars($_POST["Message"]).'</p>'); 
                        fclose($f);
                    }
                   $f = fopen("blog.txt", "r"); 
                    $ligne = fgets($f);
                
                    echo $ligne; 
                ?>
		</center>
    </header>
	<div id=trait></div>
	<footer>
	<center>
		<form id="formulaire" action="#" method="POST"> 
			<h1 id="titre_principale">Formulaire</h1>
			<label for="Pseudo">Pseudo : </label><input type="text" name="Pseudo"/>
			<br/>
			<label for="Titre">Titre : </label><input type="text" name="Titre"/>
			<br/>
			<label for="Message">Message : </label><textarea name="Message"></textarea>
			<br/>
			<br/>
			<label for="Date">
							<?php
							echo'Date : ' .$jour .'/' .$mois .'/' .$annee .' ';
							?>
		<br/>
		<br/>
		 <input id="formulaire" type="submit" value="Valider">
		</form>
		<br/>
		<form id="formulaire" action="logout.php" method ="POST">
            <input type="submit" value="Déconnexion" />
            </form>
		<form id="formulaire" action="vidage.php" method ="POST">
			<input type="submit" value="Vider" />
			</form>
	</center>
	</footer>
	</body>
	<br/>
		<div id=trait></div>
</html>

