<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
            'name' => 'Cristian Huertas',
            'email' => 'cristian.huertas0@gmail.com',
            'password' => bcrypt('12345678')
            ]);

        \App\Models\User::factory(99)->create();

    }
}
