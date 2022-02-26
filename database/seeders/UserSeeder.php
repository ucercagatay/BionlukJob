<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cagatay',
            'surname' => 'Ucer',
            'email' =>'cagataygia@gmail.com',
            'password' =>\Illuminate\Support\Facades\Hash::make('123456'),
            'created_at' =>now(),
        ]);
    }
}
