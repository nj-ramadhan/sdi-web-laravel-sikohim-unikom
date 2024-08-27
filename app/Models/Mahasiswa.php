<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama',
        'image',
        'angkatan',
        'divisi',
        'jabatan',
    ];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }

    public function berkas_program()
    {
        return $this->hasMany(BerkasProgram::class);
    }

    public function presensi_piket()
    {
        return $this->hasMany(PresensiPiket::class);
    }

    public function uang_kas()
    {
        return $this->hasMany(UangKas::class);
    }


}
