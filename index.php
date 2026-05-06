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
        
        $nombres = ["Persona1", "Persona2", "Persona3", "Persona4", "Persona5", "Persona6", "Persona7", "Persona8", "Persona9"];

        echo "Hola, " . $nombres[7];
        echo ". ¿Qué tal, " . $nombres[0] . "?";
        
        //for ($i = 0; $i < 6; $i++)
        for ($i = 0; $i < count($nombres); $i++)
        {
            echo "$nombres[$i], ";
        }

        $productoChampu = [
            "id" => 349234,
            "nombre" => "Champú",
            "precio" => 3, 
        ];

        $productoBoligrafo = [
            "id" => 872342,
            "nombre" => "Bolígrafo",
            "precio" => 1,
        ];

        echo $productoChampu["id"];

        $libro = [
            "titulo" => "Aprendiendo php",
            "isbn" => "09807237623423",
            "autoria" => "Iván",
            "fecha" => "22/04/2026",
            "precio" => "9.99€"
        ];

        echo $libro["titulo"];
        echo " (";
        echo $libro["fecha"];
        echo ") ";
        echo $libro["autoria"];
        echo ": ";
        echo $libro["precio"];

        ?>
    </p>
</body>
</html>