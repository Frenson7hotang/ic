<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
    protected $table = 'tb_profil';

    protected $primaryKey = 'id_user';

    public $timestamps = false;
    
    protected $fillable = [
        'id_user',
        'nama_user',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'departement',
        'alamat_email',
        'jabatan',
        'tanggal_bergabung',
        'status_karyawan',
        'hak_cuti',
        'gambar'
    ];
    public function dept()
    {
         return $this->belongsTo(DeptModel::class, 'departement', 'id_dept');
    }
    public function stat()
    {
         return $this->belongsTo(StatusModel::class, 'status_karyawan', 'id_stat');
    }
    public function jab()
    {
         return $this->belongsTo(JabatanModel::class, 'jabatan', 'id_jabatan');
    }
}
