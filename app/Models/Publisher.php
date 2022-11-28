<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    // protected $primaryKey = 'publisher_id';

    public function book(){
        return $this->hasMany(Book::class);
    }
}
