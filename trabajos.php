<?php
require_once ('vendor/autoload.php'); //caracter obligatorio


   use app\Models\{claseHijaTrabajos, claseHijaProyectos};
  //trabajos 

  $trab=claseHijaTrabajos::all(); //este es el vector con la informacion que me devuelve la bd
    
  // proyectos 
  $proye=claseHijaProyectos::all();
    
    //esta funcion me sirve para hacer las impresiones en mi php
   function mostrarInformacion($vectorTrabajo){
        echo '<li class="work-position">';
        echo '<h5>'. $vectorTrabajo->nombreT.'</h5>';
        echo '<p>'.$vectorTrabajo->descripcionT.'</p>';
        echo '<p>'.$vectorTrabajo->pasarYears().'</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
  }  
?>