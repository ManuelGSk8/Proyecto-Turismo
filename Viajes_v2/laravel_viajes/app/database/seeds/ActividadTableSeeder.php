<?php
use Viajes\Entities\Actividad;

class ActividadTableSeeder extends Seeder {

	public function run()
	{

        Actividad::create([
            'id'    => 1,
            'nombre_actividad'  => 'Caminata'
        ]);

        Actividad::create([
            'id'    => 2,
            'nombre_actividad'  => 'Ciclismo'
        ]);

        Actividad::create([
            'id'    => 3,
            'nombre_actividad'  => 'Montañismo'
        ]);

        Actividad::create([
            'id'    => 4,
            'nombre_actividad'  => 'Alpinismo'
        ]);
	}


}