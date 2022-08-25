<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post one',
                'excerpt' => 'Summery of Post one',
                'body' => 'Body of Post one',
                'minutes_to_read' => 5,
                'image_path' => 'Empty',
                'is_published' => false,
            ],


            [
                'title' => 'Post two',
                'excerpt' => 'Summery of Post two',
                'body' => 'Body of Post two',
                'minutes_to_read' => 10,
                'image_path' => 'Empty',
                'is_published' => false,
            ]
        ];
        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
