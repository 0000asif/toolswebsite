<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileApps extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'apps_logo',
        'title',
        'author_name',
        'author_url',
        'text',
        'img1',
        'img2',
        'img3',
        'img4',
        'meta_keywords',
        'meta_description',
        'meta_title',
        'apps',
        'view'
    ];
    public function user(){
        return $this->belongsTo(User::class);  
    }
}
