<?php
if (count($listaDeElementosDelMenu) == 0)
{
    return;
}

echo "$nombreDelMenuDesplegableParaMostrar: ";
echo "<select name=\"$nombreInternoDelMenuDesplegable\" onchange=\"document.formulario.submit()\">";
for ($i = 0; $i < count($listaDeElementosDelMenu); $i++)
{
    if (isset($_GET[$nombreInternoDelMenuDesplegable])
        && $listaDeElementosDelMenu[$i] == $_GET[$nombreInternoDelMenuDesplegable])
    {
        echo "<option selected value=\"$listaDeElementosDelMenu[$i]\">$listaDeElementosDelMenu[$i]</option>";
    }
    else
    {
        echo "<option value=\"$listaDeElementosDelMenu[$i]\">$listaDeElementosDelMenu[$i]</option>";
    }
}
echo "</select>";
?>