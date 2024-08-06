<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'mahasiswa_nim',
        'judul',
        'isi',
        'pengusul',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class,'mahasiswa_nim','id');
    }
}
