<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model implements AuthenticatableContract
{
    use HasFactory , Authenticatable;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'password',
        'address',
        'image',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
