<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    // protected $primaryKey = 'book_category_id';

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
