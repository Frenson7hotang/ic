<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeptModel extends Model
{
     protected $table = 'tb_dept';

    protected $fillable = [
        'id_dept',
        'nama_dept',
        'jumlah_staff'
    ];
}
