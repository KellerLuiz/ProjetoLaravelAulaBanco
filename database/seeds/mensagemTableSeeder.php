<?php

use Illuminate\Database\Seeder;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Boas vindas',
            'texto' => 'Seja bem vindo ao Laravel, teste',
            'autor' => 'Luiz Henrique Keller',
            'scheduledto' => '2011-09-01 13:15:00'
        ]);

        Mensagem::create([
            'titulo' => 'tchau',
            'texto' => 'Adeus ao Laravel, teste',
            'autor' => 'Luiz Henrique Keller',
            'scheduledto' => '2012-09-01 13:15:00'
        ]);

        Mensagem::create([
            'titulo' => 'dasda',
            'texto' => 'Adsadadsaravel, teste',
            'autor' => 'Luiz dfsfsd Keller',
            'scheduledto' => '2014-09-01 13:15:00'
        ]);

    }
}
