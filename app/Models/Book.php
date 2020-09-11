<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id', 'title', 'description'
    ];
    
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
