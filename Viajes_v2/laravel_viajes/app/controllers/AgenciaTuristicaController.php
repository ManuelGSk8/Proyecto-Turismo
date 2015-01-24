<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 21/12/2014
 * Time: 01:19 PM
 */
use Viajes\Repositories\AgenciaRepo;
class AgenciaTuristicaController  extends  BaseController{

    protected  $agencia;
    protected  $codigoAgencia;
   public function  __construct(AgenciaRepo $agenciaTuristica){

       $this->agencia=$agenciaTuristica;
   }


   public function consultarDatosAgencia($idUsuario){

    return    $datosAgencia=$this->agencia->consultardatosAgencia($idUsuario);


   }
    public function consultaPaqueteTuristico($slug,$idAgenciaTuristica){
        $datosAgencia=$this->agencia->find(base64_decode($idAgenciaTuristica));
        $consultaPaquete=$datosAgencia->Paqueteturistico;
        return View::make('dashboard.paquete',compact('consultaPaquete'));
    }


}