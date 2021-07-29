<?php
require('vendor/autoload.php');
use Illuminate\Database\Capsule\Manager as Capsule;
use app\Models\claseHijaProyectos;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'bdproyecto',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
if(!empty($_POST)){
    $trabajo=new claseHijaTrabajos();
    $trabajo->nombre=$_POST['nombreT'];
    $trabajo->descripcion=$_POST['descripcionT'];
    $trabajo->meses=$_POST['mesesT'];
    $trabajo->visible=$_POST['visibleT'];
    $trabajo->save();  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trabajos</title>
</head>
<body>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
<form action="../agregarProyectos.php" method="post">
    <h5>Registrar Proyectos</h5>
    <label for="">Nombre de trabajo</label>
    <input type="text" name="nombreT"><br>
    <label for="">Descripción de trabajo</label>
    <input type="text" name="descripcionT"><br>
    <label for="">Meses</label>
    <input type="text" name="mesesT"><br>
    <label for="">Visible</label>
    <input type="text" name="visibleT"><br>
    <button type="submit">Registrar</button>
    
</form>
    
</body>
</html>