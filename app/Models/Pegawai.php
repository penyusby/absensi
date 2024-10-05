<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';

    protected $primaryKey = 'id';

    public$timestamps = false;

    protected $fillable = [
        'nama',
        'tanggal_masuk',
        'jenis_kelamin',
        'alamat',
        'kota',
        'no_telp',
        'jabatan',
        'image_pegawai',
    ];
}
