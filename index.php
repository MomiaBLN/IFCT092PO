<?php
    //Modelo
    require_once("model/personal-info.php");
    require_once("model/skill.php");
    require_once("model/experience.php");
    require_once("model/curriculum.php");
    require_once("model/model-data.php");

    //Controlador
    require_once("controller/curriculum-controller.php");
    $controller = new CurriculumController($myCV);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IvánCV</title>
</head>
<body>
    <?php
        //Vista
        require_once("view/cv-page.php");
    ?>
</body>
</html>