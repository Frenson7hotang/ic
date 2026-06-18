<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeptModel extends Model
{
     protected $table = 'tb_dept';

     protected $primaryKey = 'id_dept';

     public $timestamps = false;
     
     protected $fillable = [
        'id_dept',
        'nama_dept',
    ];
    
    public function profil()
    {
        return $this->hasMany(
            ProfilModel::class,
            'departement',
            'id_dept'
        );
    }
    public function sppd()
    {
        
    }
}
