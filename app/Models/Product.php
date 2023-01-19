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
        'description', 'image', 'category'
    ];

    // Relationship with User table
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filter)
    {
        if ($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('author', 'like', '%' . request('search') . '%')
            ->orWhere('band', 'like', '%' . request('search') . '%')
            ->orWhere('studio', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('category', 'like', '%' . request('search') . '%');
        }
    }
}
