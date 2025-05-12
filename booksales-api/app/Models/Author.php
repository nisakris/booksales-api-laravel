<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
     private $authors = [
        ['id' => 1, 'name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'British author, best known for the Harry Potter series.'],
        ['id' => 2, 'name' => 'George R.R. Martin', 'photo' => 'george_rr_martin.jpg', 'bio' => 'American novelist and short story writer, known for A Song of Ice and Fire.'],
        ['id' => 3, 'name' => 'Isaac Asimov', 'photo' => 'isaac_asimov.jpg', 'bio' => 'American author and professor of biochemistry, known for his works in science fiction.'],
        ['id' => 4, 'name' => 'Vex King', 'photo' => 'vex_king.jpg', 'bio' => 'Vex King is known as the author of self-help books. He is also a British author, motivational speaker, and mind coach.'],
        ['id' => 5, 'name' => 'Tatsuya Endo', 'photo' => 'tatsuya_endo.jpg', 'bio' => 'Tatsuya Endo is a Japanese manga artist, creator of Spy x Family.'],
        ['id' => 6, 'name' => 'James Clear', 'photo' => 'james_clear.jpg', 'bio' => 'James Clear is a writer and speaker, author of the best-selling book Atomic Habits.'],
        ['id' => 7, 'name' => 'Arthur Conan Doyle', 'photo' => 'arthur_conan_doyle.jpg', 'bio' => 'Sir Arthur Conan Doyle was a British author, best known for creating Sherlock Holmes.'],
        ['id' => 8, 'name' => 'Indra Gunawan', 'photo' => 'indra_gunawan.jpg', 'bio' => 'Indra Gunawan is an Indonesian author and lecturer in computer science.'],
    ];
    
    public function getAuthors(){
        return $this -> authors;
    }
    //
}
