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
        'tanggal_berangkat',
        'tanggal_pulang',
        'nama_karyawan',
        'driver',
        'status'
    ];

    public function asal()
    {
         return $this->belongsTo(RuteModel::class, 'asal', 'id_rute');
    }
    public function tujuan()
    {
         return $this->belongsTo(RuteModel::class, 'tujuan', 'id_rute');
    }
    
}
