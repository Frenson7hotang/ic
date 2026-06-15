<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JabatanModel extends Model
{
    protected $table = 'tb_jabatan';

    protected $primaryKey = 'id_jabatan';

    protected $fillable = [
        'id_jabatan',
        'jabatan'
    ];
}
