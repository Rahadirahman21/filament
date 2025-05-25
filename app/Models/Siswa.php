<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jurusan',
        'nis',
        'nama',
        'kelas',
        'alamat',
        'jenis_kelamin',
        'no_hp',
        'foto',
    ];
    public function jurusan(): HasOne
    {
        return $this->hasOne(Jurusan::class);
    }
}
