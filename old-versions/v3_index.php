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
        $conteo = 0;
        while ($conteo < 10)
        {
            $conteo += 1;
            $resultado = $conteo * 3;
            print("$resultado, ");
        }

        for ($i = 0; $i < 10; $i++)
        {
            $resultado = $i * 3;
            print("$resultado, ");
        }

        for ($i=10; $i >= 0; $i--)
        { 
            print("$i, ");
        }
        
        ?> 
        <br/>
        <?php

        print("Conteo finalizado");
        
        ?>
    </p>
</body>
</html>