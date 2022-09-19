<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'file',
    ];
    protected $primaryKey = 'id_galleries';
}
