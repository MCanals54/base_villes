<html>
<header>
<h1> Projet DIU NSI </h1>
</header>
<title> Base de données MONDE </title>

<ul> 
<li> Tables </li>
	<ul> 
	<li><a href="villes.php"> Villes </a></li>
	<li>Pays </li>
	<li> Langues </li>
	</ul>
<li> Requêtes </li>
	<ul>
	<li> Requête 1 </li>
	<li> Requête 2 </li>
	<li> Requête 3 </li>
	<li> Requête 4 </li>
	<li> Requête 5 </li>
	<li> Requête 6 </li>
	</ul>
<li> Formulaire </li>
<li> Mappemonde </li>
</ul>
</html>
<?php
if (! $db ) {
	
	$server_adress = 'localhost';
	$username = 'root';
	$passwd ='';
	$base_name ='world1';
	
	$db = new mysqli($server_adress, $username , $passwd , $base_name) ;
	if ($db->connect_errno) 
		echo "Echec lors de la connexion à MySQL : (" . $db->connect_errno . ") " . $db->connect_error;
	else 
		echo "Succès de la connection à la base de données ";
}
?>	
	