<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'author',
        'published_year',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
