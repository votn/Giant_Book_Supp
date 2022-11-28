<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // protected $primaryKey = 'book_id';

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function book_category(){
        return $this->hasMany(BookCategory::class);
    }

}
