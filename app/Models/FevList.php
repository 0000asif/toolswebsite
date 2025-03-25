<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FevList extends Model
{
    use HasFactory;
    protected $fillable = [ 'post_id', 'customer_id'];
    
    public function post(){
        return $this->belongsTo(Blog::class,'post_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
