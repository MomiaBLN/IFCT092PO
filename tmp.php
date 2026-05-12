
$dsn = 'mysql:host=localhost;dbname=curso_web;charset=utf8mb4';
$pdo = new PDO($dsn, "root", "", [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

$sql = "SELECT * FROM tickets";
$respuesta = $pdo->query($sql)->fetchAll();

var_dump($respuesta);

foreach ($respuesta as $ticket)
{
    extract($ticket);
    echo $id_ticket;
    echo $descripcion;
}