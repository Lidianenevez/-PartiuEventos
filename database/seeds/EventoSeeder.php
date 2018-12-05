<?php

use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evento')->insert([
            'imagem' => '1_20181204_060657.jpeg',
            'nome_evento' => 'Pós',
            'descricao' => 'Shfsfsdfjs fsdofjsp odjfsjpsjfposjf sdow',
            'cidade' => '307',
            'preco' => '983.45',
            'fk_user_id' => '1',
            'fk_categoria_id' => '1',
		]);
    }
}
