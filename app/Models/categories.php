<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{

    protected $fillable = [
        'name',
        'type',
    ];

    protected $primaryKey = 'id_categories';
}
