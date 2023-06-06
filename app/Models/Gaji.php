<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_gaji';
    protected $primaryKey = 'id_gaji';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_gaji',
        'tanggal',
        'departemen',
        'jumlah',
        'potongan_gaji',
        'lembur',
        'id_karyawan'
    ];
    use HasFactory;
}
