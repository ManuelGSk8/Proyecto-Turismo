<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 23/11/14
 * Time: 08:00 PM
 */
use Viajes\Entities\Paqueteturistico;
use Faker\Factory as Faker;
class paquetesTuristicos extends  Seeder{
    public function run(){
        DB::table('paqueteturistico')->insert(array(
            'id'=>1,
            'nombre_paquete'=>'Tour Machupicchu 3 Días 2 Noches',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'485',
            'region'=>'Sierra',
            'duracion_paqueteDias'=>'3',
            'duracion_paqueteNoches'=>'2',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>2,
            'nombre_paquete'=>'Cusco Clasico 4 Días / 3 Noches',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'605',
            'region'=>'Sierra',
            'duracion_paqueteDias'=>'4',
            'duracion_paqueteNoches'=>'3',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>3,
            'nombre_paquete'=>'Cusco Conexion Puno 7 Dias 6 Noches',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'945',
            'region'=>'Sierra',
            'duracion_paqueteDias'=>'7',
            'duracion_paqueteNoches'=>'6',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));

        /**otra empresa */
        DB::table('paqueteturistico')->insert(array(
            'id'=>4,
            'nombre_paquete'=>'Trek Selva Inca a Machu Picchu - 4d/3n',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'675',
            'region'=>'Sierra',
            'duracion_paqueteDias'=>'4',
            'duracion_paqueteNoches'=>'3',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>5,
            'nombre_paquete'=>'Día Completo a Lunahuaná',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'85',
            'region'=>'Costa',
            'duracion_paqueteDias'=>'1',
            'duracion_paqueteNoches'=>'0',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/luna.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>6,
            'nombre_paquete'=>'Descubre el Norte del Perú',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'14_chan_chan',
            'precio'=>'700',
            'region'=>'Costa',
            'duracion_paqueteDias'=>'4',
            'duracion_paqueteNoches'=>'3',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/14_chan_chan.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>7,
            'nombre_paquete'=>'City Tour en Lima',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'El tour presenta Lima en sus tres períodos históricos: pre-hispánico, colonial y moderno.',
            'precio'=>'90',
            'region'=>'Costa',
            'duracion_paqueteDias'=>'1',
            'duracion_paqueteNoches'=>'0',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'descuentoPorc'=>'0',
            'foto_paquete'=>'fotoSubida/city_4.jpg',
            'agencia_id'=>'1'
        ));


    }
} 