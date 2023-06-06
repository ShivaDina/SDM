<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'id_karyawan';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_karyawan',
        'nama',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'agama',
        'status',
        'email',
        'no_rekening',
        'pemilik_rekening',
        'jabatan',
        'id_pendidikan',
        'id_pengembangan',
        'id_tunjangan'
    ];
    use HasFactory;
}