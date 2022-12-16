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
        $categories = ['php', 'laravel', 'back end dev', 'front end dev', 'python'];

        foreach ($categories as $category) {
            Tag::create([
                'name' => $category
            ]);
        }
    }
}
