<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'user_id',
        'name',
        'email',
        'number',
        'text',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
