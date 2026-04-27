<?php
    $nombre = $_POST['nombre'];
    echo $nombre;

    $edad = $_POST['edad'];
    echo $edad;

    $listaDeColores = ["Ninguno", "Morado", "Rojo", "Azul"];
    
    $posicionDelColor = $_POST['colores'];
    echo $listaDeColores[$posicionDelColor];
?>
<br/>
<?php
    require_once('Persona.php');
    $usuario = new Persona($nombre, $edad, $listaDeColores[$posicionDelColor]);
    echo $usuario->PersonaATexto();
?>
<br/>
<?php
    echo $usuario->RestanteHastaElSiglo();
?>