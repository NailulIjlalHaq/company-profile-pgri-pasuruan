<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'cover_img',
        'title',
        'content',
        'tag',
        'id_categories',
        'type',
        'is_focus',
    ];
    protected $primaryKey = 'id_posts';
}
