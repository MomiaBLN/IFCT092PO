<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>¡Hola!</title>
</head>
<body>
    <h1>
        <?php
        echo "¡Hola, mundo!";
        ?>
    </h1>
    <p>
        <?php

        $nombrePropio = "Iván";
        $nombreDeUsuario = "Paco";

        if ($nombrePropio == $nombreDeUsuario)
        {
            echo "¡Hola, tocayo! </br>";
        }
        else
        {
            echo "¡Hola, $nombreDeUsuario! </br>";
        }

        $miEdad = 37;
        $edadUsuario = 80;

        if ($edadUsuario < 18)
        {
            echo "¿Puedo ayudarte en algo?";
        }
        elseif ($edadUsuario < $miEdad)
        {
            echo "¿Una partidita?";
        }
        elseif ($edadUsuario == $miEdad)
        {
            echo "hey!";
        }
        else
        {
            echo "Enséñame algo.";
        }
        ?> 
    </p>
</body>
</html>