<?php
			$direccion= "https://pokeapi.co/api/v2/pokemon/";
			$json= file_get_contents($direccion);
			$info= json_decode($json,true);

			foreach ($info as $pokemon) {
				echo '<pre>';
				print_r ($pokemon);
				echo '<pre>';
			}
		?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		<title>Lista Pokemon</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

		<table class="default">

		  <tr>

			    <td><a href="#">Ivysaur</a></td>

			    <td><a href="#">Charmander</a></td>

			    <td><a href="#">Charizard</a></td>

		  </tr>

		  <tr>

			    <td><a href="#">Wartortle</a></td>

			    <td><a href="#">Caterpie</a></td>

			    <td><a href="#">Butterfree</a></td>

		  </tr>

		  <tr>
		  	
			  	<td><a href="#">Kakuna</a></td>

			  	<td><a href="#">Pidgey</a></td>

			  	<td><a href="#">Pidgeot</a></td>

		  </tr>

		</table>

</body>
</html>