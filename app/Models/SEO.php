<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    use HasFactory;
    protected $fillable = ['text','meta_title','meta_description','meta_keywords','user_id','view','type'];
    
}
