<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('ActividadTableSeeder');
        //$this->call('CategoriaTableSeeder');
        $this->call('agenciasTuristicasSeeder');
        $this->call('paquetesTuristicos');
		// $this->call('UserTableSeeder');
	}

}
