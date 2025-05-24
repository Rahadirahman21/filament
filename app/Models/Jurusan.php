<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jurusan',
        'nama_kaprog',
        'nama_kabeng',
        'ruangan',
        'foto',
    ];
}
