<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'author', 'pages',
        'band', 'studio', 'playlength', 'price',
        'description', 'image'
    ];

    // Relationship with User table
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
