<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected  $fillable=[
        'name',
        'description',
        'image',
        'type'
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
