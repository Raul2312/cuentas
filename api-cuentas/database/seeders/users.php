<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;    
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('users')->insert([
            'name' => 'Raul Madrid',
            'email' => 'raulmadridflores202@gmail.com',
            'password' => Hash::make('123'),
            'img' => 'default.jpg',
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
