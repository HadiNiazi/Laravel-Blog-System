<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['php', 'laravel php', 'back end development', 'front end dev'];

        foreach ($categories as $category) {
            Tag::create([
                'name' => $category
            ]);
        }
    }
}
