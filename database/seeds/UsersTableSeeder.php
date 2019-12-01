<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Robson Mosena Soares',
            'apelido'           => 'Robson',
            'email'             => 'robsonmsoares@gmail.com',
            'password'          => bcrypt('123456'),
            'cpfCnpj'           => '12345678952',
            'dataNascimento'    => '19880729',
            'userTip'           => '1',
            'timeCoracaoId'     => '14',
        ]);
    }
}
