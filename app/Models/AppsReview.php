<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppsReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'name',
        'email',
        'phone',
        'review',
        'status'
    ];
}
