<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividuDaftar extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'nama',
        'noKP',
        'noKPlama',
        'jantina',
        'tarikh_lahir',
        'tempat_lahir'
    ];
}
