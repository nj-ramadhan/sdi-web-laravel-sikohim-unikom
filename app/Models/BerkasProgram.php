<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasProgram extends Model
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
        'deskripsi',
        'berkas',
        'status',
    ];   
    
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class,'mahasiswa_nim','id');
    }
}
