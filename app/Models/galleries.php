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
        'id_user'
    ];
    protected $primaryKey = 'id_galleries';

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
