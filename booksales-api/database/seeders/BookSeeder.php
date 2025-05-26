<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter and Sorcerers',
            'description' => 'The first book in the Harry Potter series.',
            'price' => 25000.00,
            'stock' => 37,
            'cover_photo' => 'harry_potter.jpg',
            'genres_id' => 1,
            'authors_id' => 1
        ]);

        Book::create([
            'title' => 'The lord of the rings',
            'description' => 'A classic fantasy novel by J.R.R. Tolkien.',
            'price' => 60000.00,
            'stock' => 30,
            'cover_photo' => 'the lord_of_the_rings.jpg',
            'genres_id' => 1,
            'authors_id' => 2
        ]);

        Book::create([
            'title' => '1984',
            'description' => 'A dystopian novel by George Orwell.',
            'price' => 40000.00,
            'stock' => 40,
            'cover_photo' => '1984.jpg',
            'genres_id' => 2,
            'authors_id' => 3
        ]);

        Book::create([
            'title' => 'The Hitchhikers Guide to the Galaxy',
            'description' => 'A comedy science fiction novel by Douglas Adams.',
            'price' => 30000.00,
            'stock' => 20,
            'cover_photo' => 'the_hitchhikers_guide_to_the_galaxy.jpg',
            'genres_id' => 3,
            'authors_id' => 3
        ]);

        Book::create([
            'title' => 'The Hobbit',
            'description' => 'A fantasy novel by J.R.R. Tolkien.',
            'price' => 50000.00,
            'stock' => 30,
            'cover_photo' => 'the_hobbit.jpg',
            'genres_id' => 1,
            'authors_id' => 2
        ]);

        Book::create([
            'title' => 'Good Vibes, Good Life',
            'description' => 'A book about self-love, positivity, and mindset.',
            'price' => 60000.00,
            'stock' => 20,
            'cover_photo' => 'good_vibes.jpg',
            'genres_id' => 5,
            'authors_id' => 4
        ]);

        Book::create([
            'title' => 'Spy X Family',
            'description' => 'A manga series about a spy family.',
            'price' => 55000.00,
            'stock' => 5,
            'cover_photo' => 'spy_x_family.jpg',
            'genres_id' => 6,
            'authors_id' => 5
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'A book on building good habits and breaking bad ones.',
            'price' => 65000.00,
            'stock' => 10,
            'cover_photo' => 'atomic_habits.jpg',
            'genres_id' => 7,
            'authors_id' => 6
        ]);

        Book::create([
            'title' => 'Sherlock Holmes',
            'description' => 'A detective fiction series about Sherlock Holmes solving mysterious cases.',
            'price' => 65000.00,
            'stock' => 5,
            'cover_photo' => 'sherlock_holmes.jpg',
            'genres_id' => 1,
            'authors_id' => 7
        ]);

        Book::create([
            'title' => 'Algoritma Pemrograman',
            'description' => 'A programming book for beginners to understand algorithms in Indonesian.',
            'price' => 70000.00,
            'stock' => 25,
            'cover_photo' => 'algoritma.jpg',
            'genres_id' => 7,
            'authors_id' => 8
        ]);

        Book::create([
            'title' => 'Machine Learning',
            'description' => 'Pengantar konsep dan aplikasi machine learning.',
            'price' => 100000.00,
            'stock' => 10,
            'cover_photo' => 'machine_learning.jpg',
            'genres_id' => 7,
            'authors_id' => 8
        ]);

        Book::create([
            'title' => 'Midnight Library',
            'description' => 'Sebuah novel tentang pilihan hidup dan kemungkinan tak terbatas.',
            'price' => 65000.00,
            'stock' => 5,
            'cover_photo' => 'midnight_library.jpg',
            'genres_id' => 1,
            'authors_id' => 4
        ]);

        Book::create([
            'title' => 'Spy x Family Vol. 2',
            'description' => 'A manga series about a spy family Vol. 2',
            'price' => 55000.00,
            'stock' => 5,
            'cover_photo' => 'spyxfamily_vol2.jpg',
            'genres_id' => 6,
            'authors_id' => 5
        ]);
    }
}
