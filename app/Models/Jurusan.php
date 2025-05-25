<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
