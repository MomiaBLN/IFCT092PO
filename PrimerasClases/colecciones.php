<?php
//Página 82
function SumarLista($listaDeNumeros) : int
{
    $total = 0;

    for ($i = 0; $i < count($listaDeNumeros); $i++)
    {
        echo $listaDeNumeros[$i];
        $total = $total + $listaDeNumeros[$i];

        //Para la última posición, coloca un punto
        if ($i == count($listaDeNumeros) - 1)
        {
            echo ".";
        }
        //Para la penúltima posición, coloca " y "
        else if($i == count($listaDeNumeros) - 2)
        {
            echo " y ";
        }
        //para el resto, coloca una coma
        else
        {
            echo ", ";
        }
    }
    echo " Total: $total.";

    return $total;
}

?>

<?php
$unaListaDeNumeros = [23, 5, 48, 27, 0, 9823, 152, 95];
SumarLista($unaListaDeNumeros);
?>
<br/>
<?php
echo "Fin del código";
?>
