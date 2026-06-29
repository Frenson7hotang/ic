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

    protected $casts = [
     'nama_karyawan' => 'array'
    ];
    public function getListNamaAttribute()
    {
        return ProfilModel::whereIn('id_user', $this->nama_karyawan)
            ->pluck('nama_user');
    }

    public function start()
    {
         return $this->belongsTo(RuteModel::class, 'asal', 'id_rute');
    }
    public function finish()
    {
         return $this->belongsTo(RuteModel::class, 'tujuan', 'id_rute');
    }
    
}
