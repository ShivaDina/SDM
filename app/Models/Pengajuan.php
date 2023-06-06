<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_pengajuanijin';
    protected $primaryKey = 'id_pengajuan';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_pengajuan',
        'tanggal_izin',
        'akhir_izin',
        'kode_izin'
    ];
    use HasFactory;
}
