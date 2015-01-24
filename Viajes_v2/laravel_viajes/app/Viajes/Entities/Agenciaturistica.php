<?php
namespace Viajes\Entities;

class Agenciaturistica extends \Eloquent {
	protected $fillable = array('ruc','razon_social','nombre_Comercial','telefono','direccion','contacto','web','latitud','longitud','foto','id_usuario');
    protected $table = 'agenciaturisticas';

    public static function countAgenciaTuristica($idUsuario){

        return $resultado=\DB::table('agenciaturisticas')->where('id_usuario','=',$idUsuario)->count();

    }

   public static function infoAgenciaTuristica($idUsuario){

        return $resultado=\DB::table('agenciaturisticas')->where('id_usuario','=',$idUsuario)->get();
    }

    public static function consultarIdAgencia($idUsuario){

      //  return $resultado=\DB::table('agenciaturisticas')->where('id_usuario','=',$idUsuario)->get();
        return $results = \DB::select('select id from agenciaturisticas where id_usuario = ?', array($idUsuario));
    }

    public function Paqueteturistico(){
        return $this->hasMany('Viajes\Entities\Paqueteturistico');
    }

    //consultas de json
   public static function jsonConsultarTodaslasAgencias(){
       return $resultado=\DB::table('agenciaturisticas')->where('estado','=','0')->get();
   }
   public static function jsonConsultarinfolasAgencias($id){

       $query ="select  * from agenciaturisticas a where a.id=".$id;
       return $results = \DB::select($query);
   }
    public static function jsonConsultarinfolasAgenciasPaquete($id){

        $query ="select  a.ruc,a.nombre_Comercial,a.telefono,a.direccion,a.foto,p.nombre_paquete,p.precio,p.duracion_paqueteDias,p.duracion_paqueteNoches,p.foto_paquete from agenciaturisticas a inner join paqueteturistico p on a.id=p.agencia_id where a.id=".$id;
        return $results = \DB::select($query);
    }

}