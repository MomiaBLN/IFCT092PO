<?php
    require_once('cupon.php');

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];
    $numero5 = $_POST['numero5'];

    $cupon = new Cupon($numero1,
                         $numero2,
                         $numero3,
                         $numero4,
                         $numero5);

    echo $cupon->CuponATexto();
    echo "<br/>";

    $cuponGanador = $cupon->CrearCuponAleatorio();

    echo $cupon->CuponATexto();
    echo "<br/>";
    echo $cuponGanador->CuponATexto();
    echo "<br/>";

    if ($cuponGanador->CompararCupones($cupon))
    {
        echo "<h1>¡Has ganado!<h1/>";
    }
    else
    {
        echo "¡Has perdido!";
    }
?>