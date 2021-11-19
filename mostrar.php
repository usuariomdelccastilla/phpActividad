<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
    <title>Datos Ingresados</title>
</head>

<body>
   <header>
        <h2>Información que ingresaste:</h2> 
		<hr>
    </header>
	<main>
    <section>
        <?php
		  $nombre = $_REQUEST['nombre'];    
          $apellido = $_REQUEST['apellido'];   
          $edad = $_REQUEST['edad'];     
		  $hobbie = $_REQUEST['hobbie'];   
          $editorCodigo = $_REQUEST['editorCodigo'];
          
          echo "Tu Nombre y Apellido es: ";
          echo $nombre . " ". $apellido;
          echo "<br>"; 
          echo "Tienes: ";
          echo $edad .  " años";
		  echo "<br>"; 
		  echo "Tu Hobbie es: ";
          echo $hobbie;
          echo "<br>"; 
          echo "Tu Editor de Código preferido es: ";
          echo $editorCodigo;
          echo "<br>"; 
          echo "El Sistema Operativo que estás usando es: ";
          echo PHP_OS;
		  
        ?>
    </section>
	</main>
	<footer>
		<hr>
        <p> Codo a Codo 4.0 Full Stack PHP - Comisión 1115 -
            María del Carmen Castilla</p>
    </footer>
</body>
</html>