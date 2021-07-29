<?php
namespace app\Models;
use Illuminate\Database\Eloquent\Model;


    class claseHijaTrabajos extends Model {
      protected $table = 'ttrabajos';
     
        public function pasarYears(){
            $years=floor($this->meses/12);
            $mesesSobrantes=$this->meses%12;
            if($years==0){
              return "Tiempo de experiencia: $mesesSobrantes meses";
            }
            if($mesesSobrantes==0){
                if($years==1){
                    return "Tiempo de experiencia: $years Año";
                }
                else{
                     return "Tiempo de experiencia:  $years Años";
                }
            }
            else{
              return "Tiempo de experiencia: $years años y $mesesSobrantes meses";
            }
        }
    }
?>