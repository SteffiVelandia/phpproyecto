<?php 
ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require ('../vendor/autoload.php');  

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use app\Model\claseHijaTrabajo;

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

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index','/phpproyecto/', 'C:\xamppp\htdocs\phpproyecto\public\index.php');
$map->get('agregarTrabajos', '/phpproyecto/trabajos','C:\xamppp\htdocs\phpproyecto\agregarTrabajos.php');
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
var_dump($route->handler);
if(!$route){
    echo "No encontramos su ruta \n";
}else{
    require ($route->handler);
}



//var_dump($request->getUri()->getPath());
//var_dump($route->handler);
//var_dump($matcher);
// if(! $route){
//     $failedRoute = $matcher->getFailedRoute();
//     var_dump($failedRoute);
//     var_dump($route);
// }
//var_dump($request->getUri()->getPath());
//var_dump($route);


// $route=$_GET['route']??'/';
// echo $route;
// if($route=='/'){
//     require_once('../index.php');
// }elseif($route=='agregarTrabajos'){
//     require '../agregarTrabajos.php';
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
    
</body>
</html>