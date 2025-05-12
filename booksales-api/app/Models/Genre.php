<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['id' => 1, 'name' => 'Fiction', 'description' => 'A literary work based on the imagination and not necessary fact.'],
        ['id' => 2, 'name' => 'Non-Fiction', 'description' => 'A literary work based on facts and real events.'],
        ['id' => 3, 'name' => 'Science Fiction', 'description' => 'A genre that deals with imaginative and futuristic'],
        ['id' => 5, 'name' => 'Self-Help', 'description' => 'Books that offer insights into personal development and growth.'],
        ['id' => 6, 'name' => 'Manga', 'description' => 'Japanese comic books and graphic novels.'],
        ['id' => 7, 'name' => 'Psychology', 'description' => 'Books exploring the human mind and behavior.'],
        ['id' => 8, 'name' => 'Thriller', 'description' => 'Books that are designed to keep readers on the edge of their seats with suspenseful plots.'],
        ['id' => 9, 'name' => 'Computer Science', 'description' => 'Books on programming, algorithms, and software development.'],
    ];

    
    public function getGenres(){
        return $this -> genres;
    }
}
