<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisijin extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_jenisijin';
    protected $primaryKey = 'kode_izin';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'kode_izin',
        'keterangan'
    ];
    use HasFactory;
}
