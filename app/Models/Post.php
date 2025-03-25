<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'customer_id',
        'title',
        'content',
        'img',
        'status',
        'slug',
        'gellery_img',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'view',
        'alt_text',
    ];
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
