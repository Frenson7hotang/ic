<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuteModel extends Model
{
    protected $table = 'tb_rute';

     protected $primaryKey = 'id_rute';

     public $timestamps = false;
     
     protected $fillable = [
        'id_dept',
        'nama_rute'
    ];
}
