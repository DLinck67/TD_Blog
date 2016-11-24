<?php session_start(); 
	
	$_SESSION['pseudo']="Nicolas";
	$_SESSION['mot_de_passe']="Prison";

?>


<!DOCTYPE html>
<html>
<center>
<head>
	<meta charset="utf-8">
	<title>Page Login</title>
	<link rel="stylesheet" href="CSSBlog.css">
	<script type="script.js"></script>
</head>
<body>
	<div id=trait></div>
	<h1 id="titre_principale"> Page de Connexion </h1>
	<form action="TDBlog.php" method="POST">
    Pseudo: <input type="text" name="pseudo" value="" />
    Mot de passe: <input type="password" name="mot_de_passe" value="" />
    <input type="submit" name="valider" value="Valider" />
	</form>
	<br/>
</body>

<?php
	if(isset($_POST['pseudo'],$_POST['mot_de_passe']) && $_POST['pseudo']==$_SESSION['pseudo'] && $_POST['mot_de_passe']==$_SESSION['mot_de_passe']){
			header ('Location: TDBlog.php');
	}else{
		echo "Renseigner les champs ci-dessus. <br/>";
		
		echo "Aide : Pseudo : Nicolas. Mot de passe : Prison. <br/>";
	}
?>
<div id=trait></div>
</center>
</html>