<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'book_id', 'name'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
