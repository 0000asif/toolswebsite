<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
