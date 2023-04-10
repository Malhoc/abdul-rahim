<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author_name',
        'book',
        'narrated_by',
        'slug',
        'video',
        'thumbnail',
        'meta_tag_title',
        'meta_tag_keywords',
        'meta_tag_description',
        'thumbnail_alt',
        // 'image_alt',
        'is_active',
        // 'blog_category_id',
        'admin_id',

    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
