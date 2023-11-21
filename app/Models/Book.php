<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //sesuai dengan row table
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'year',
        'isbn',
        'cover',
        'description',
        'category'
    ];
}
