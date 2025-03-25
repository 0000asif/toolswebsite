<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'slug',
        'status',
        'text',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'view'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
