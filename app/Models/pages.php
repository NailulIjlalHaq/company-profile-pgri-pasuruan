<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'title',
    //     'content',
    // ];
    protected $guarded = [];
    protected $primaryKey = 'id_pages';
}
