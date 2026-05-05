El contenido de este proyecto es el resultado directo del seguimiento de las clases de programación web con software libre.

Para instalar php, sigue este enlace: https://www.php.net/downloads.php?os=windows&osvariant=windows-native&version=default
 > [!Warning]
 > Según tu versión de Windows puede ocurrir que necesites actualizar Microsoft Visual C++ Redistributable para que sea compatible con la última versión de php. Puedes encontrar las últimas versiones en: https://learn.microsoft.com/es-es/cpp/windows/latest-supported-vc-redist?view=msvc-170

Para Visual Studio Code: https://code.visualstudio.com/download

Y encuentra toda la documentación relacionada con php en su página web: https://www.php.net/manual/es/

>[!Tip]
>Echa un vistazo a las ramas del proyecto para volver a versiones anteriores con el código de cada momento del curso y ponte en contacto conmigo si echas alguna en falta (por favor, ten en cuenta que por diversos motivos puede que tarde en contestar o actualizar).

### Contenido
En esta versión del proyecto nos aseguramos de que todo funciona correctamente tras la instalación y somos capaces de arrancar el servidor local correctamente. Para ello, creamos un proyecto en Visual Studio Code y, en él, un archivo llamado "index.php" con la palabra clave _echo_ seguida del mensaje entre comillado ("¡Hola, mundo!").

Para arrancar el servidor abrimos la consola de comandos (cmd, terminal o símbolo de sistema) y nos desplazamos a la ubicación de nuestro proyecto (por ejemplo: 'C:\Users\\[Tu usuario aparecerá aquí]\Documents\Curso web'). Puedes usar el comando _cd_ para cambiar de directorio.

```
cd C:\Users\MomiaBLN\Documents\Curso web
```

Cuando tu consula muestre la ubicación adecuada (C:\Users\MomiaBLN\Documents\Curso web>) podrás usar el siguiente comando para lanzar el servidor:

```
php -S localhost:8000
```

Si todo ha funcionado correctamente verás un mensaje parecido a éste:
```
PHP 8.5.5 Development Server (http://localhost:8000) started
```

Ahora podrás ir a tu navegador web y ver tu primera proto-página web entrando en [http://localhost:8000](http://localhost:8000)