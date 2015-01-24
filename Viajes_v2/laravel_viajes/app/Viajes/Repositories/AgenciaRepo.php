<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 21/12/2014
 * Time: 10:59 AM
 */

namespace Viajes\Repositories;
use Viajes\Entities\Paqueteturistico;
use Viajes\Entities\Agenciaturistica;

class AgenciaRepo {



    public function consultardatosAgencia($idUsuario){
        $consulta= Agenciaturistica::where('id_usuario',$idUsuario)->get();
        if($consulta->count()>0){

            return $consulta;
        }else{
            return $consulta='0';
        }
    }

    public function Paqueteturistico(){
        return $this->hasMany('Paqueteturistico');
    }

    public function  find($idAgencia){

        return  Agenciaturistica::find($idAgencia);
    }
}