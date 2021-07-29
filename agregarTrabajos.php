<?php
require('vendor/autoload.php');
use Illuminate\Database\Capsule\Manager as Capsule;
use app\Models\claseHijaTrabajos;

if(!empty($_POST)){
    $trabajo=new claseHijaTrabajos();
    $trabajo->nombreT=$_POST['nombreT'];
    $trabajo->descripcionT=$_POST['descripcionT'];
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
<form action="agregarTrabajos.php" method="post">
    <h5>Registrar Trabajos</h5>
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