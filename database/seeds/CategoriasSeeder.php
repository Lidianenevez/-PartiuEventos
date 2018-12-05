<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categoria')->insert([
			'nome_categoria' => 'Show',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Curso',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Palestra',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Workshop',
		]);
	}
}
