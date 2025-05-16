<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'British author, best known for the Harry Potter series.'
        ]);
        Author::create([
            'name' => 'George R.R. Martin', 'photo' => 'george_rr_martin.jpg', 'bio' => 'American novelist and short story writer, known for A Song of Ice and Fire.'
        ]);
        Author::create([
            'name' => 'Isaac Asimov', 'photo' => 'isaac_asimov.jpg', 'bio' => 'American author and professor of biochemistry, known for his works in science fiction.'
        ]);
        Author::create([
            'name' => 'Vex King', 'photo' => 'vex_king.jpg', 'bio' => 'Vex King is known as the author of self-help books. He is also a British author, motivational speaker, and mind coach.'
        ]);
        Author::create([
            'name' => 'Tatsuya Endo', 'photo' => 'tatsuya_endo.jpg', 'bio' => 'Tatsuya Endo is a Japanese manga artist, creator of Spy x Family.'
        ]);
        Author::create([
            'name' => 'James Clear', 'photo' => 'james_clear.jpg', 'bio' => 'James Clear is a writer and speaker, author of the best-selling book Atomic Habits.'
        ]);
        Author::create([
            'name' => 'Arthur Conan Doyle', 'photo' => 'arthur_conan_doyle.jpg', 'bio' => 'Sir Arthur Conan Doyle was a British author, best known for creating Sherlock Holmes.'
        ]);
        Author::create([
            'name' => 'Indra Gunawan', 'photo' => 'indra_gunawan.jpg', 'bio' => 'Indra Gunawan is an Indonesian author and lecturer in computer science.'
        ]);
    }
}
