<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Title of a longer featured blog post",
            'promo' => "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.",
            'body'  => "This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.",
            'img'   => '',
            'category_id' => 3,
            'author'   => 3,
        ]);

        DB::table('posts')->insert([
            'title' => "Featured post",
            'promo' => "This is a wider card with supporting text below as a natural lead-in to additional content.",
            'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'img'   => '',
            'category_id' => 1,
            'author'   => 3,
        ]);

        DB::table('posts')->insert([
            'title' => "Post title",
            'promo' => "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit",
            'body'  => "Nullam pretium eros et finibus rhoncus. Pellentesque id facilisis erat. Nulla id quam vitae orci laoreet placerat. Aliquam sodales neque id leo porta pulvinar. Phasellus nec pharetra orci. Etiam ut elit quis purus congue finibus. Nullam finibus nulla vitae augue tristique lobortis. Sed sit amet libero non quam dignissim ornare.",
            'img'   => '',
            'category_id' => 4,
            'author'   => 3,
        ]);

        DB::table('posts')->insert([
            'title' => "Title of a longer featured blog post",
            'promo' => "Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.",
            'body'  => "This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.",
            'img'   => '',
            'category_id' => 12,
            'author'   => 3,
        ]);
    }
}
