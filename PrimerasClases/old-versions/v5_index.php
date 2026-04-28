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
            $listaDeFrutas = [
                ["fruta" => "manzana", "id" => 5201, "precio" => 9.99],
                ["fruta" => "naranja", "id" => 6502, "precio" => 5],
                ["fruta" => "plátano", "id" => 6574, "precio" => 2.50],
                ["fruta" => "kiwi", "id" => 7632, "precio" => 12.50]
            ];

            for ($i=0; $i < 4; $i++)
            {
                if ($listaDeFrutas[$i]["precio"] <= 5)
                {
                    echo $listaDeFrutas[$i]["fruta"];
                    echo ", ";
                }

                if($listaDeFrutas[$i]["id"] < 7000)
                {
                    echo $listaDeFrutas[$i]["fruta"];
                    echo "*, ";
                }
            }
        ?>
    </p>
</body>
</html>