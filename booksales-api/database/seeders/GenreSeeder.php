<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        Genre::create([
            'name' => 'Fiction', 'description' => 'A literary work based on the imagination and not necessary fact.'
        ]);
        Genre::create([
            'name' => 'Science Fiction', 'description' => 'A genre that deals with imaginative and futuristic'
        ]);
        Genre::create([
            'name' => 'Self-Help', 'description' => 'Books that offer insights into personal development and growth.'
        ]);
        Genre::create([
            'name' => 'Manga', 'description' => 'Japanese comic books and graphic novels.'
        ]);
        Genre::create([
            'name' => 'Psychology', 'description' => 'Books exploring the human mind and behavior.'
        ]);
        Genre::create([
            'name' => 'Thriller', 'description' => 'Books that are designed to keep readers on the edge of their seats with suspenseful plots.'
        ]);
        Genre::create([
            'name' => 'Computer Science', 'description' => 'Books on programming, algorithms, and software development.'
        ]);
        
    }
}
