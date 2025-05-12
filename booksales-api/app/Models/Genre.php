<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['id' => 1, 'name' => 'Fiction'],
        ['id' => 2, 'name' => 'Non-Fiction'],
        ['id' => 3, 'name' => 'Fantasy'],
        ['id' => 4, 'name' => 'Science Fiction'],
        ['id' => 5, 'name' => 'Mystery']
    ];
    
    public function getGenres(){
        return $this -> genres;
    }
}
