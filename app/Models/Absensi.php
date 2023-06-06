<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_absensi';
    protected $primaryKey = 'id_absensi';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_absensi',
        'tanggal',
        'shift',
        'id_karyawan',
        'id_pengajuan'
    ];

    use HasFactory;
}
