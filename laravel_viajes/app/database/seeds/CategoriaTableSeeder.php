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