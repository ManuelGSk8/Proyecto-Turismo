<?php
namespace Viajes\Entities;

class Paqueteturistico extends \Eloquent {
	protected $fillable = ['nombre_paquete','fecha_inicio','fecha_fin','info_basica','precio','region','duracion_paqueteDias','duracion_paqueteNoches','estado','foto_paquete','foto_paquete_android','agencia_id','promocion','porcentaje'];
    protected $table = 'paqueteturistico';

    public static function consultarPaquetesTuristicos($id){

        $idAgencia=Agenciaturistica::consultarIdAgencia($id);

        if(count($idAgencia)>0){
            return $resultado=\DB::table('paqueteturistico')->where('agencia_id','=',$idAgencia[0]->id)->get();
        }else{
            return $idAgencia;
        }

       // return $resultado=\DB::table('paqueteturistico')->where('agencia_id','=',$idAgencia)->get();

    }
    public static function consultarPaquetesTuristicosTotales(){
        return $resultado=\DB::table('paqueteturistico')->where('estado','=','activo')->get();
    }
    public static function actualizarEstadoPaquete($idPaquete){


        return $resultado=Paqueteturistico::find($idPaquete);
    }

}