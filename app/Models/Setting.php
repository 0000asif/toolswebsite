<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'fav_icon',
        'site_title',
        'short_description',
        'phone',
        'email',
        'booking_time',
        'whatsapp_number',
        'fb_link',
        'instagram_link',
        'x_link',
        'linkedin',
        'youtube_link',
        'youtube_video',
        'footer_about',
        'address',
        'map',
        'payment_img',
        'footer_bg',
        'meta_title',
        'meta_description',
        'keywords',
        'meta_url',
        'meta_img',
        'copyright_text',
        'user_id',
        'view',
        'header_text',
        'footer_text',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
