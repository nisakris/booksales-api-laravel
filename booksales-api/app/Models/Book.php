<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        ['id' => 1, 'name' => 'J.K. Rowling'],
        ['id' => 2, 'name' => 'George R.R. Martin'],
        ['id' => 3, 'name' => 'Isaac Asimov'],
        ['id' => 4, 'name' => 'Agatha Christie'],
        ['id' => 5, 'name' => 'Arthur Conan Doyle']
    ];
    
    public function getBooks(){
        return $this -> books;
    }
}
