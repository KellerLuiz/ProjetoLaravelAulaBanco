<?php

use Illuminate\Database\Seeder;
use App\Atividade;

class atividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mensagens::create([
            'titulo' => 'Boas vindas',
            'texto' => 'Seja bem vindo ao Laravel, teste',
            'autor' => 'Luiz Henrique Keller',
            'scheduledto' => '2018-09-01 13:15:00'
        ]);

        mensagens::create([
            'titulo' => 'tchau',
            'texto' => 'Adeus ao Laravel, teste',
            'autor' => 'Luiz Henrique Keller',
            'scheduledto' => '2018-09-01 13:15:00'
        ]);

        mensagens::create([
            'titulo' => 'dasda',
            'texto' => 'Adsadadsaravel, teste',
            'autor' => 'Luiz dasdsad Keller',
            'scheduledto' => '2018-09-01 13:15:00'
        ]);


    }
}
