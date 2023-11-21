<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //menambahkan data dummy
        Book::created([
            'title' => 'The Lord of the rings',
            'author' => 'J. R. R. Tolkien',
            'publisher' => 'Allen & Unwin',
            'year' => '1954',
            'isbn' => '978-0-04-823993-3',
            'cover' => 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg',
            'description' => 'The lord of the rings is an epic fantasy novel written by enhlish author and scholar J.R.R Tolkien beetwen 1937 and 1949',
            'category' => 'Fantasy'
        ]);
    }
}
