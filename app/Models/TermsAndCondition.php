<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndCondition extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'view'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
