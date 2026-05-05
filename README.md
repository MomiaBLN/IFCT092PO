El contenido de este proyecto es el resultado directo del seguimiento de las clases de programación web con software libre.

Para instalar php, sigue este enlace: https://www.php.net/downloads.php?os=windows&osvariant=windows-native&version=default
 > [!Warning]
 > Según tu versión de Windows puede ocurrir que necesites actualizar Microsoft Visual C++ Redistributable para que sea compatible con la última versión de php. Puedes encontrar las últimas versiones en: https://learn.microsoft.com/es-es/cpp/windows/latest-supported-vc-redist?view=msvc-170

Para Visual Studio Code: https://code.visualstudio.com/download

Y encuentra toda la documentación relacionada con php en su página web: https://www.php.net/manual/es/

>[!Tip]
>Echa un vistazo a las ramas del proyecto para volver a versiones anteriores con el código de cada momento del curso y ponte en contacto conmigo si echas alguna en falta (por favor, ten en cuenta que por diversos motivos puede que tarde en contestar o actualizar).

### Contenido
Como segundo paso vimos cómo modificar el comportamiento de nuestro código con condiciones y la sintaxis necesaria que consiste de tres elementos nuevos: palabras clave, comparaciones y bloques de código.

[WIP]

#### Palabras clave
Indicadas al principio de la línea, utilizaremos distintas palabras para indicar que empieza una parte especial de nuetro código. Si sabes inglés, no te sorprenderán que las palabras utilizas sean:

* if, que significa "si" en inglés,
* else if, que significa "o si", y
* else, que significa "si no".

#### Comparación
Después de las palabras clave, entre paréntesis, encontraremos la parte del código que se evalua para decidir si ejecutar o no el siguiente bloque. En ese lugar debe indicarse siempre verdadero o falso y, por norma general, veremos comparaciones o fórmulas algo más complejas.

#### Bloque de código
Podemos aglutinar varias líneas de código en un mismo bloque usando '{' y '}' de manera que todo el código que quede en medio forme un único bloque. Si dicho bloque viene precedido de una condición indicada correctamente, sólo se ejecutará cuando se cumpla la condición.

``` php
if (true)
{
    echo "Esto siempre se ejecutará";
}
```
