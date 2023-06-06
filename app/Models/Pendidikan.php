<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'tb_pendidikan';
    protected $primaryKey = 'id_pendidikan';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_pendidikan',
        'tingkat_pendidikan',
        'jurusan',
        'institusi',
        'keterangan'
    ];

    use HasFactory;
}
