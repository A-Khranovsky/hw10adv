<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
