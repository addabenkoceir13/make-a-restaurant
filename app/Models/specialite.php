<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;

    protected $table = 'specialites';
    protected $fillable = [
        'id',
        'titre',
        'photo',
    ];
}
