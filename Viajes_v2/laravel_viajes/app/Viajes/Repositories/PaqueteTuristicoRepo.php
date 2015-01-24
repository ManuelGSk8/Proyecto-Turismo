<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 21/12/2014
 * Time: 09:24 AM
 */
namespace Viajes\Repositories;
use Viajes\Entities\Paqueteturistico;

class PaqueteTuristicoRepo {

    public function find($idAgencia){

       return  Paqueteturistico::find($idAgencia);

    }

}