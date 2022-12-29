<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'author', 'band', 'studio', 
        'price', 'pages', 'playlength', 'description', 'image'
    ];

    // Relationship with User table
    public function users() 
    {
        return $this->belongsTo(User::class);
    }
}
