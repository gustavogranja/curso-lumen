<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email' => 'gus@g3tec.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789')
        ]);
    }
}
