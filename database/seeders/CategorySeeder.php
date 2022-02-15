<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'World'],
            ['name' => 'U.S.'],
            ['name' => 'Technology'],
            ['name' => 'Design'],
            ['name' => 'Culture'],
            ['name' => 'Business'],
            ['name' => 'Politics'],
            ['name' => 'Opinion'],
            ['name' => 'Science'],
            ['name' => 'Health'],
            ['name' => 'Style'],
            ['name' => 'Travel'],
        ]);
    }
}
