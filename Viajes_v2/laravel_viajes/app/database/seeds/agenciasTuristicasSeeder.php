<?php
use Viajes\Entities\Agenciaturisticas;
use Faker\Factory as Faker;
class agenciasTuristicasSeeder   extends Seeder {

    public function run(){
        $faker = Faker::create();
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