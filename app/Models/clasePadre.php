<?php
namespace app\Models;


    class clasePadre  {
        private $nombreTrabajo;
        protected $descripcion;
        public $visible;
        public $meses;
  
        public function mostrarTrabajo(){ //metodos
           return $this->nombreTrabajo;
        }
        public function mostrarDescripcion(){ //metodos
          return $this->descripcion;
        }
        public function obtenerNombreTrabajo($nomTrabajo){
          if($nomTrabajo==''){
            $this->nombreTrabajo='No Cargo el Nombre';
          }
          else{
            $this->nombreTrabajo=$nomTrabajo;
          }
        }
        public function obtenerDescripcion($desc){
          if($desc==''){
            $this->nombreTrabajo='No Cargo la descripciòn!';
          }
          else{
            $this->descripcion=$desc;
          }
        }
        public function __construct($nom, $des, $vis,$mes){
          $this->nombreTrabajo=$nom;
          $this->descripcion=$des;
          $this->visible=$vis;
          $this->meses=$mes;
        } 
    }

?>