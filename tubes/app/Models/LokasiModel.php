<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table = 'lokasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['daerah', 'kota', 'latitude', 'longitude'];

    public function getLokasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }


    public function pencarian($kunci)
    {
        return $this->table('lokasi')->like('daerah', $kunci);
    }
}
//--------------------------------------------------------------------
