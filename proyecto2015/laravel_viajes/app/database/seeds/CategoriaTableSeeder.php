<?php
use Viajes\Entities\Categoria;

class CategoriaTableSeeder extends Seeder {

	public function run()
	{

        Categoria::create([
            'id'    => 1,
            'nombre_categoria'  => 'Clase A'

        ]);

        Categoria::create([
            'id'    => 2,
            'nombre_categoria'  => 'Clas B'

        ]);

        Categoria::create([
            'id'    => 3,
            'nombre_categoria'  => 'Clase C'

        ]);
        Categoria::create([
            'id'    => 4,
            'nombre_categoria'  => 'Clase D'

        ]);
	}

}

class agenciasTuristicas extends Seeder{


    public function run(){

        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>1,
                'ruc'=>'20490529016',
                'razon_social'=>'Agencia Andean Culture',
                'nombre_Comercial'=>'Andean Culture',
                'telefono'=>'6576053',
                'direccion'=>'Urb. Bancopata - José Olaya H-7',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/andean_culture.jpg',
                'id_usuario'=>'1'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>2,
                'ruc'=>'20523852613',
                'razon_social'=>'Agencia Chasqui Bus',
                'nombre_Comercial'=>'Chasqui Bus',
                'telefono'=>'6576053',
                'direccion'=>'Av. Armendariz 234 - Oficina 202',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/andean_culture.jpg',
                'id_usuario'=>'2'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>3,
                'ruc'=>'20450753387',
                'razon_social'=>'Agencia DAYDREAM TRAVEL AGENCY',
                'nombre_Comercial'=>'DAYDREAM TRAVEL AGENCY',
                'telefono'=>'6576053',
                'direccion'=>'Av el sol 816 A-1',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/logo_day_sm.jpg',
                'id_usuario'=>'3'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>4,
                'ruc'=>'20545992265',
                'razon_social'=>'Agencia INCATREK',
                'nombre_Comercial'=>'INCATREK',
                'telefono'=>'6576053',
                'direccion'=>'Av. Benavides 265 Of. C',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/logo_de_incatrek.png',
                'id_usuario'=>'4'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>5,
                'ruc'=>'20552667787',
                'razon_social'=>'Agencia DESTINOS SOÑADOS',
                'nombre_Comercial'=>'DESTINOS SOÑADOS',
                'telefono'=>'6576053',
                'direccion'=>'Av. pacasmayo Mzi Lt21 urb. albino Herrera',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/logo_de_destinos.png',
                'id_usuario'=>'5'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>6,
                'ruc'=>'20566102197',
                'razon_social'=>'Agencia GRUPO ECOTOURS S.A.C.',
                'nombre_Comercial'=>'GRUPO ECOTOURS S.A.C',
                'telefono'=>'6576053',
                'direccion'=>'Av. Uruguay 346 Int. 310 Cercado de Lima',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/logo_grupo.png',
                'id_usuario'=>'6'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>7,
                'ruc'=>'20547194773',
                'razon_social'=>'Agencia PERU ROUTES',
                'nombre_Comercial'=>'PERU ROUTES',
                'telefono'=>'6576053',
                'direccion'=>'Av. Carlos Izaguirre Nº 586 , Urb. Panamericana Norte',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/LOGO_PR_ORIGINAL.png',
                'id_usuario'=>'7'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>8,
                'ruc'=>'20566102197',
                'razon_social'=>'Agencia GRUPO ECOTOURS S.A.C',
                'nombre_Comercial'=>'GRUPO ECOTOURS S.A.C',
                'telefono'=>'6576053',
                'direccion'=>'Av. Uruguay 346 Int. 310 Cercado de Lima',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/LOGO_ECOLOGY_TOURS.png',
                'id_usuario'=>'8'
            )
        );
        DB::table('agenciaturisticas')->insert(
            array(
                'id'=>9,
                'ruc'=>'20450542840',
                'razon_social'=>'Agencia Peru Tours Cusco',
                'nombre_Comercial'=>'Peru Tours Cusco',
                'telefono'=>'',
                'direccion'=>'Urb. la planicie D4-B',
                'contacto'=>'',
                'web'=>'',
                'foto'=>'fotoSubida/logo_peru_cusco.jpg',
                'id_usuario'=>'9'
            )
        );

        }
}

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
            'porcentaje'=>'0',
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
            'porcentaje'=>'0',
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
            'porcentaje'=>'0',
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
            'porcentaje'=>'0',
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
            'porcentaje'=>'0',
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
            'porcentaje'=>'0',
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
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/city_4.jpg',
            'agencia_id'=>'1'
        ));
      /*  /*Otra agencia turistica*/
       /* DB::table('paqueteturistico')->insert(array(
            'id'=>8,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>9,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>10,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>11,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>12,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>13,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));
        DB::table('paqueteturistico')->insert(array(
            'id'=>14,
            'nombre_paquete'=>'20490529016',
            'fecha_inicio'=>'13/11/2014',
            'fecha_fin'=>'20/11/2014',
            'info_basica'=>'6576053',
            'precio'=>'Urb. Bancopata - José Olaya H-7',
            'region'=>'',
            'duracion_paqueteDias'=>'',
            'duracion_paqueteNoches'=>'',
            'estado'=>'desactivado',
            'promocion'=>'0',
            'porcentaje'=>'0',
            'foto_paquete'=>'fotoSubida/andean_culture.jpg',
            'agencia_id'=>'1'
        ));*/

    }
}