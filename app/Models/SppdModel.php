<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SppdModel extends Model
{
    protected $table = 'tb_luarkota';

     protected $primaryKey = 'id_perjalanan';

     public $timestamps = false;
     
     protected $fillable = [
        'id_perjalanan',
        'asal',
        'tujuan',
        'keperluan',
        'keterangan',
        'tanggal_berankat',
        'tanggal_pulang',
        'nama_karyawan',
        'status'
    ];
}
