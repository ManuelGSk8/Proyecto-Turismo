<?php
namespace Viajes\Entities;

class Paqueteturistico extends \Eloquent {
	protected $fillable = ['nombre_paquete','fecha_inicio','fecha_fin','info_basica','precio','region','duracion_paqueteDias','duracion_paqueteNoches','estado','foto_paquete','foto_paquete_android','agencia_id','promocion','porcentaje'];
    protected $table = 'paqueteturistico';


    public function agencia(){

        return $this->belongsTo('Viajes\Entities\AgenciaTuristica');
    }


    public static function consultarPaquetesTuristicosTotales(){
        return $resultado=\DB::table('paqueteturistico')->where('estado','=','activo')->get();
    }
    public static function actualizarEstadoPaquete($idPaquete){


        return $resultado=Paqueteturistico::find($idPaquete);
    }


    public static  function PaqueteAgenciaTuristicaJSON(){
        $query="select t.id,a.nombre_Comercial,a.id as idagencia ,t.nombre_paquete,t.precio,t.duracion_paqueteDias ,t.duracion_paqueteNoches,t.foto_paquete from paqueteturistico t inner join agenciaturisticas a on t.agencia_id=a.id where t.estado='activo'" ;

        return $results = \DB::select($query);
    }
    public static  function jsonConsultarPaquetespersonalizado($id){

        $query="select t.id,a.* ,t.nombre_paquete,t.precio,t.duracion_paqueteDias ,t.duracion_paqueteNoches,t.foto_paquete from paqueteturistico t inner join agenciaturisticas a on t.agencia_id=a.id where t.id=".$id;

        return $results = \DB::select($query);
        //dd($query);
    }
}