<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 10/01/2015
 * Time: 11:54 AM
 */

class PaquetesController extends  BaseController {

    public function creacionPaquete(){

        /*return View::make('dashboard.paquete',compact('consultaPaquete'));*/
        return View::make('dashboard.admi_paquete');
    }

}