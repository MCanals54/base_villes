<?php
namespace project;
?>
<html>
<head>   
<title>Liste des villes</title>
</head>
<body>
<h1>Tables des villes</h1>

<?php

$sql="select * from City";
$result = $db->query($sql);
$num = $result->num_rows;

for ($j = 0; $j < $num; $j++) {
	$ligne = $result->fetch_array();
	echo $ligne["Name"]."<br>";
}

$db->close();

?>
</body>
</html> 