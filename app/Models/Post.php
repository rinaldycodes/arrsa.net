<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    protected $fillable = ['title', 'slug', 'image', 'category_id', 'body', 'user_id'];

    protected $hidden = [];

    public function category() {
        return $this->hasMany(Category::Class);
    }
}
