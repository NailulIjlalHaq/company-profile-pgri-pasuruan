<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class configs extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'title',
    //     'content',
    // ];
    protected $guarded = [];
    protected $primaryKey = "id_configs";
}
