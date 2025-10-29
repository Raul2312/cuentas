<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;    

class transactions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('transactions')->insert([
            'ammount' => 250.75,
            'type' => 'Gasto',
            'description' => 'Compra de alimentos',
            'user_id' => 1,
            'category_id' => 1,
            'account_id' => 1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
