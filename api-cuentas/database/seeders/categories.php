<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;    

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('categories')->insert([
            'name' => 'Alimentos',
            'type' => 'Gasto',
            'user_id' => 1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
