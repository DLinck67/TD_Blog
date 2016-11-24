<?php 
	$ecrire = fopen('blog.txt',"w");
	ftruncate($ecrire,0);
	header('Location: TDBlog.php');
  exit();
?>
