<?php

$Cabeceras = array("chiste: 7/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10","chiste: 3/10");
$URL = array('http://goo.gl/7JiIqU','http://goo.gl/1jZTWd','https://s-media-cache-ak0.pinimg.com/236x/cc/22/bd/cc22bd3f79a1882bebdf16ebe4545e17.jpg');
$Precio = array('7m','5m','5m','5m','5m','5m','5m','5m','5m','5m','5m','5m','5m','5m','5m');
$chistes = "";

for($i=0;$i<3;$i++){
	$clase = "DivisionSettings";
	$clasetext = "TextFont";
	
	if ($i % 2 == 0){
		$clase = "DivisionSettings2";
		$clasetext = "TextFont2";
	}
	$chistes = $chistes . "	
		<a href='https://www.google.es'><div class = '$clase'>
		<h4 class = '$clasetext'>$Cabeceras[$i]</h4>
		<img class='PictureSettings' src=$URL[$i] alt='<ERROR: NO PIC. FOUND IN DESIERED DIRECTORY>'>
		<span class = '$clasetext'>$Precio[$i]</span>
	</div></a>";
}

echo "<!DOCTYPE HTML>
	
	<html>
	<head>
	<link rel='stylesheet' href='estilo.css'>
	<script src='script.js'></script>
	
	</head>
	<body>
	
	
	$chistes
	

	</body>
	</html>
	
	";
	
?>