
<!doctype html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8" />
    <title>Maratón</title>
    <script src="js/phaser.min.js"></script>
    <style type="text/css">
        * {
			padding: 0;
			margin: 0;
		}
		html, body {
			overflow: hidden;
			touch-action: none;
			-ms-touch-action: none;
		}
		canvas {
			touch-action-delay: none;
			touch-action: none;
			-ms-touch-action: none;
		}
    </style>
</head>
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "maratonFinal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//pregunta1
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta1 = $row["texto"];
	$respuesta1 =$row["respuesta1"];
	$respuesta2 =$row["respuesta2"];
	$respuesta3 =$row["respuesta3"];
	$respuesta4 =$row["respuesta4"];
	$opcion1 =$row["opcion1"];
	$opcion2 =$row["opcion2"];
	$opcion3 =$row["opcion3"];
	$opcion4 =$row["opcion4"];

	
  }
} else {
}

//pregunta2
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta12 = $row["texto"];
	$respuesta12 =$row["respuesta1"];
	$respuesta22 =$row["respuesta2"];
	$respuesta32 =$row["respuesta3"];
	$respuesta42 =$row["respuesta4"];
	$opcion12 =$row["opcion1"];
	$opcion22 =$row["opcion2"];
	$opcion32 =$row["opcion3"];
	$opcion42 =$row["opcion4"];

	
  }
} else {
}

//pregunta3
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta13 = $row["texto"];
	$respuesta13 =$row["respuesta1"];
	$respuesta23 =$row["respuesta2"];
	$respuesta33 =$row["respuesta3"];
	$respuesta43 =$row["respuesta4"];
	$opcion13 =$row["opcion1"];
	$opcion23 =$row["opcion2"];
	$opcion33 =$row["opcion3"];
	$opcion43 =$row["opcion4"];

	
  }
} else {
}

//pregunta4
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='4'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta14 = $row["texto"];
	$respuesta14 =$row["respuesta1"];
	$respuesta24 =$row["respuesta2"];
	$respuesta34 =$row["respuesta3"];
	$respuesta44 =$row["respuesta4"];
	$opcion14 =$row["opcion1"];
	$opcion24 =$row["opcion2"];
	$opcion34 =$row["opcion3"];
	$opcion44 =$row["opcion4"];

	
  }
} else {
}

//pregunta5
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='5'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta15 = $row["texto"];
	$respuesta15 =$row["respuesta1"];
	$respuesta25 =$row["respuesta2"];
	$respuesta35 =$row["respuesta3"];
	$respuesta45 =$row["respuesta4"];
	$opcion15 =$row["opcion1"];
	$opcion25 =$row["opcion2"];
	$opcion35 =$row["opcion3"];
	$opcion45 =$row["opcion4"];

	
  }
} else {
}

//pregunta6
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='6'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta16 = $row["texto"];
	$respuesta16 =$row["respuesta1"];
	$respuesta26 =$row["respuesta2"];
	$respuesta36 =$row["respuesta3"];
	$respuesta46 =$row["respuesta4"];
	$opcion16 =$row["opcion1"];
	$opcion26 =$row["opcion2"];
	$opcion36 =$row["opcion3"];
	$opcion46 =$row["opcion4"];

	
  }
} else {
}

//pregunta7
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='7'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta17 = $row["texto"];
	$respuesta17 =$row["respuesta1"];
	$respuesta27 =$row["respuesta2"];
	$respuesta37 =$row["respuesta3"];
	$respuesta47 =$row["respuesta4"];
	$opcion17 =$row["opcion1"];
	$opcion27 =$row["opcion2"];
	$opcion37 =$row["opcion3"];
	$opcion47 =$row["opcion4"];

	
  }
} else {
}

//pregunta8
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='8'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta18 = $row["texto"];
	$respuesta18 =$row["respuesta1"];
	$respuesta28 =$row["respuesta2"];
	$respuesta38 =$row["respuesta3"];
	$respuesta48 =$row["respuesta4"];
	$opcion18 =$row["opcion1"];
	$opcion28 =$row["opcion2"];
	$opcion38 =$row["opcion3"];
	$opcion48 =$row["opcion4"];

	
  }
} else {
}

//pregunta9
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='9'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta19 = $row["texto"];
	$respuesta19 =$row["respuesta1"];
	$respuesta29 =$row["respuesta2"];
	$respuesta39 =$row["respuesta3"];
	$respuesta49 =$row["respuesta4"];
	$opcion19 =$row["opcion1"];
	$opcion29 =$row["opcion2"];
	$opcion39 =$row["opcion3"];
	$opcion49 =$row["opcion4"];

	
  }
} else {
}

//pregunta10
$sql = "SELECT texto, respuesta1, respuesta2, respuesta3, respuesta4, opcion1, opcion2, opcion3, opcion4 FROM preguntas WHERE id='10'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pregunta110 = $row["texto"];
	$respuesta110 =$row["respuesta1"];
	$respuesta210 =$row["respuesta2"];
	$respuesta310 =$row["respuesta3"];
	$respuesta410 =$row["respuesta4"];
	$opcion110 =$row["opcion1"];
	$opcion210 =$row["opcion2"];
	$opcion310 =$row["opcion3"];
	$opcion410 =$row["opcion4"];

	
  }
} else {
}
//pregunta10
$sql = "SELECT nombreAsignatura FROM asignaturas WHERE id='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $asignatura1 = $row["nombreAsignatura"];


	
  }
} else {
}

$conn->close();
?>

<script type="text/javascript">

		//asignaturas
		window.miAsignatura1 = "<?php echo $asignatura1 ?>";

		//pregunta1
        window.miPreguntaUno = "<?php echo $pregunta1 ?>";
		window.miRespuesta1Uno = "<?php echo $respuesta1 ?>";
		window.miRespuesta2Uno = "<?php echo $respuesta2 ?>";
		window.miRespuesta3Uno = "<?php echo $respuesta3 ?>";
		window.miRespuesta4Uno = "<?php echo $respuesta4 ?>";
		window.miOpcion1Uno = "<?php echo $opcion1 ?>";
		window.miOpcion2Uno = "<?php echo $opcion2 ?>";
		window.miOpcion3Uno = "<?php echo $opcion3 ?>";
		window.miOpcion4Uno = "<?php echo $opcion4 ?>";

		//pregunta2
		window.miPreguntaDos = "<?php echo $pregunta12 ?>";
		window.miRespuesta1Dos = "<?php echo $respuesta12 ?>";
		window.miRespuesta2Dos = "<?php echo $respuesta22 ?>";
		window.miRespuesta3Dos = "<?php echo $respuesta32 ?>";
		window.miRespuesta4Dos = "<?php echo $respuesta42 ?>";
		window.miOpcion1Dos = "<?php echo $opcion12 ?>";
		window.miOpcion2Dos = "<?php echo $opcion22 ?>";
		window.miOpcion3Dos = "<?php echo $opcion32 ?>";
		window.miOpcion4Dos = "<?php echo $opcion42 ?>";

       //pregunta3
		window.miPreguntaTres = "<?php echo $pregunta13 ?>";
		window.miRespuesta1Tres = "<?php echo $respuesta13 ?>";
		window.miRespuesta2Tres = "<?php echo $respuesta23 ?>";
		window.miRespuesta3Tres = "<?php echo $respuesta33 ?>";
		window.miRespuesta4Tres = "<?php echo $respuesta43 ?>";
		window.miOpcion1Tres = "<?php echo $opcion13 ?>";
		window.miOpcion2Tres = "<?php echo $opcion23 ?>";
		window.miOpcion3Tres = "<?php echo $opcion33 ?>";
		window.miOpcion4Tres = "<?php echo $opcion43 ?>";

		//pregunta4
		window.miPreguntaCuatro = "<?php echo $pregunta14 ?>";
		window.miRespuesta1Cuatro = "<?php echo $respuesta14 ?>";
		window.miRespuesta2Cuatro = "<?php echo $respuesta24 ?>";
		window.miRespuesta3Cuatro = "<?php echo $respuesta34 ?>";
		window.miRespuesta4Cuatro = "<?php echo $respuesta44 ?>";
		window.miOpcion1Cuatro = "<?php echo $opcion14 ?>";
		window.miOpcion2Cuatro = "<?php echo $opcion24 ?>";
		window.miOpcion3Cuatro = "<?php echo $opcion34 ?>";
		window.miOpcion4Cuatro = "<?php echo $opcion44 ?>";

		//pregunta5
		window.miPreguntaCinco = "<?php echo $pregunta15 ?>";
		window.miRespuesta1Cinco = "<?php echo $respuesta15 ?>";
		window.miRespuesta2Cinco = "<?php echo $respuesta25 ?>";
		window.miRespuesta3Cinco = "<?php echo $respuesta35 ?>";
		window.miRespuesta4Cinco = "<?php echo $respuesta45 ?>";
		window.miOpcion1Cinco = "<?php echo $opcion15 ?>";
		window.miOpcion2Cinco = "<?php echo $opcion25 ?>";
		window.miOpcion3Cinco = "<?php echo $opcion35 ?>";
		window.miOpcion4Cinco = "<?php echo $opcion45 ?>";

		//pregunta6
		window.miPreguntaSeis = "<?php echo $pregunta16 ?>";
		window.miRespuesta1Seis = "<?php echo $respuesta16 ?>";
		window.miRespuesta2Seis = "<?php echo $respuesta26 ?>";
		window.miRespuesta3Seis = "<?php echo $respuesta36 ?>";
		window.miRespuesta4Seis = "<?php echo $respuesta46 ?>";
		window.miOpcion1Seis = "<?php echo $opcion16 ?>";
		window.miOpcion2Seis = "<?php echo $opcion26 ?>";
		window.miOpcion3Seis = "<?php echo $opcion36 ?>";
		window.miOpcion4Seis = "<?php echo $opcion46 ?>";

		//pregunta7
		window.miPreguntaSiete = "<?php echo $pregunta17 ?>";
		window.miRespuesta1Siete = "<?php echo $respuesta17 ?>";
		window.miRespuesta2Siete = "<?php echo $respuesta27 ?>";
		window.miRespuesta3Siete = "<?php echo $respuesta37 ?>";
		window.miRespuesta4Siete = "<?php echo $respuesta47 ?>";
		window.miOpcion1Siete = "<?php echo $opcion17 ?>";
		window.miOpcion2Siete = "<?php echo $opcion27 ?>";
		window.miOpcion3Siete = "<?php echo $opcion37 ?>";
		window.miOpcion4Siete = "<?php echo $opcion47 ?>";

		//pregunta8
		window.miPreguntaOcho = "<?php echo $pregunta18 ?>";
		window.miRespuesta1Ocho = "<?php echo $respuesta18 ?>";
		window.miRespuesta2Ocho = "<?php echo $respuesta28 ?>";
		window.miRespuesta3Ocho = "<?php echo $respuesta38 ?>";
		window.miRespuesta4Ocho = "<?php echo $respuesta48 ?>";
		window.miOpcion1Ocho = "<?php echo $opcion18 ?>";
		window.miOpcion2Ocho = "<?php echo $opcion28 ?>";
		window.miOpcion3Ocho = "<?php echo $opcion38 ?>";
		window.miOpcion4Ocho = "<?php echo $opcion48 ?>";

		//pregunta9
		window.miPreguntaNueve = "<?php echo $pregunta19 ?>";
		window.miRespuesta1Nueve = "<?php echo $respuesta19 ?>";
		window.miRespuesta2Nueve = "<?php echo $respuesta29 ?>";
		window.miRespuesta3Nueve = "<?php echo $respuesta39 ?>";
		window.miRespuesta4Nueve = "<?php echo $respuesta49 ?>";
		window.miOpcion1Nueve = "<?php echo $opcion19 ?>";
		window.miOpcion2Nueve = "<?php echo $opcion29 ?>";
		window.miOpcion3Nueve = "<?php echo $opcion39 ?>";
		window.miOpcion4Nueve = "<?php echo $opcion49 ?>";

		//pregunta10
		window.miPreguntaDiez = "<?php echo $pregunta110 ?>";
		window.miRespuesta1Diez = "<?php echo $respuesta110 ?>";
		window.miRespuesta2Diez = "<?php echo $respuesta210 ?>";
		window.miRespuesta3Diez = "<?php echo $respuesta310 ?>";
		window.miRespuesta4Diez = "<?php echo $respuesta410 ?>";
		window.miOpcion1Diez = "<?php echo $opcion110 ?>";
		window.miOpcion2Diez = "<?php echo $opcion210 ?>";
		window.miOpcion3Diez = "<?php echo $opcion310 ?>";
		window.miOpcion4Diez = "<?php echo $opcion410 ?>";
    </script>
<body>


<script type="module" src="js/main.js">
</script>
</body>
</html>