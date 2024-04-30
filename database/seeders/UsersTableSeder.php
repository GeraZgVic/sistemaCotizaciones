<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=> 'Carlos',
            'email'=> 'carlos.reyes@siccoms.com',
            'password'=> Hash::make('carlos123'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Victor',
            'email'=> 'victor.zuniga@siccoms.com',
            'password'=> Hash::make('victor123'),
        ]);
    }
}
