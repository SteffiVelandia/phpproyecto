<?php
namespace app\Models;
use Illuminate\Database\Eloquent\Model;


    class  claseHijaProyectos extends Model{
      protected $table = 'tproyectos';
    

        public function pasarYears(){
          $years=floor($this->meses/12);
          $mesesSobrantes=$this->meses%12;
            if($years==0){
              return "El tiempo del proyecto fue: $mesesSobrantes meses";
            }
            if($mesesSobrantes==0){
              return "El tiempo del proyecto fue: $years Años";
            }
            else{
              return "El tiempo del proyecto fue: $years años y $mesesSobrantes meses";
            }
        }

    }
?>