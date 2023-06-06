<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembangan extends Model
{
     /**
     * @var string $table
     */
    protected $table = 'tb_pengembangandiri';
    protected $primaryKey = 'id_pengembangan';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id_pengembangan' ,
        'jenis_pelatihan',
        'institusi' ,
        'tgl_mulai' ,
        'tgl_selesai',
        'keterangan' 
    ];
    use HasFactory;
}
