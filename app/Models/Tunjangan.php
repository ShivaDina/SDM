<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_tunjangan';
    protected $primaryKey = 'id_tunjangan';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_tunjangan',
        'tanggal',
        'bpjs',
        'thr',
        'tunjangan_haritua',
        'jumlah'
    ];
    use HasFactory;
}