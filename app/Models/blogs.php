<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blogs extends Model
{
    use HasFactory;

    // ✅ These are the fields you can mass assign
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'slug',
        'image',
    ];

    // ✅ Blog belongs to a user (author)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ✅ Blog has many comments
   
}
