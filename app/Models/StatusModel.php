<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    protected $table = 'tb_status';

    protected $fillable = [
        'id_stat',
        'status_jabatan',
        'jumlah_karyawan'
    ];
}
