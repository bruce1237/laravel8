<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPosts extends Model
{
    use HasFactory;
    protected $table = 'myPosts';

    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }
}
