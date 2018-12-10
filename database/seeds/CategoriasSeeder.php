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
			'nome_categoria' => 'Acadêmicos',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Comunitários',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Corporativos',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Culturais',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Educionais',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Esportivos',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Políticos',
		]);
		DB::table('categoria')->insert([
			'nome_categoria' => 'Sociais',
		]);
	}
}
