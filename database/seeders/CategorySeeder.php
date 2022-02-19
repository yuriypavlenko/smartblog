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
            ['name' => 'World', 'slug' => 'world', 'color' => '#DF2027'],
            ['name' => 'U.S.', 'slug' => 'u.s.', 'color' => '#F46B23'],
            ['name' => 'Technology', 'slug' => 'technology', 'color' => '#FFE700'],
            ['name' => 'Design', 'slug' => 'design', 'color' => '#A8CF38'],
            ['name' => 'Culture', 'slug' => 'culture', 'color' => '#2CB34A'],
            ['name' => 'Business', 'slug' => 'business', 'color' => '#01ACA4'],
            ['name' => 'Politics', 'slug' => 'politics', 'color' => '#0EAFE5'],
            ['name' => 'Opinion', 'slug' => 'opinion', 'color' => '#0072BB'],
            ['name' => 'Science', 'slug' => 'science', 'color' => '#53439B'],
            ['name' => 'Health', 'slug' => 'health', 'color' => '#7D4199'],
            ['name' => 'Style', 'slug' => 'style', 'color' => '#A82068'],
            ['name' => 'Travel', 'slug' => 'travel', 'color' => '#A82068'],
        ]);
    }
}
