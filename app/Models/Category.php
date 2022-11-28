<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $primaryKey = 'category_id';

    public function book_category(){
        return $this->hasMany(BookCategory::class, 'category_id', 'id');
    }
}
