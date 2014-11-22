<?php
namespace Viajes\Entities;

class Agenciaturistica extends \Eloquent {
	protected $fillable = array('ruc','razon_social','nombre_Comercial','telefono','direccion','contacto','web','foto','id_usuario');


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

}