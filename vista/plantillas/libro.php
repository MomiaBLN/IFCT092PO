<?php
function MostrarLibroEnLista(Libro $libro)
{
    echo "<div>";
    echo "ID: " . $libro->id;
    echo "\t<a href=/ficha.php?id=" . $libro->id . ">Ver ficha</a><br>";
    echo "Título: " . $libro->titulo . " (" . $libro->autor . ", " . $libro->FechaDePublicacionATexto() . ")<br>";
    echo "</div><br><br>";
}

function MostrarLibroEnFicha(Libro $libro)
{
    echo "<div>";
    echo "ID: " . $libro->id . "<br>";
    echo "ISBN: " . $libro->isbn . "<br>";
    echo "Título: " . $libro->titulo . "<br>";
    echo "Autor: " . $libro->autor . "<br>";
    echo "Fecha de publicación: " . $libro->FechaDePublicacionATexto() . "<br>";
    echo "</div><br><br>";
}
?>