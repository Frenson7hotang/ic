<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
    protected $table = 'tb_profil';

    protected $fillable = [
        'id_user',
        'nama_user',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'departement',
        'jabatan',
        'tanggal_bergabung',
        'status_karyawan',
        'hak_cuti',
        'gambar'
    ];
}
