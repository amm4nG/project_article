<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // beri tahu laravel bahwa nama tablenya adlah articles
    protected $table = 'articles';
    // field yang akan di isi
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
