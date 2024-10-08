<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Desa, Agama, Pekerjaan, Tahun};

class Penduduk extends Model
{
    use HasFactory;
    Protected $table = 'penduduks';
    Protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'agama_id',
        'desa_id',
        'pekerjaan_id',
        'tahun_id',
        'foto',
        'alamat',
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
}
