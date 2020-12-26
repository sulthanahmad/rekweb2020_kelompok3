<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class Daerah extends BaseController
{

    protected $db, $builder;
    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function daerahView()
    {
        $data = [

            'title' => 'Edit Profile',
            'lokasi' => $this->lokasiModel->getLokasi()
        ];

        return view('admin/daerahView', $data);
    }
    //--------------------------------------------------------------------


    public function daerah()
    {
        $data = [

            'title' => 'Edit Profile',

        ];

        return view('admin/daerah', $data);
    }
    //--------------------------------------------------------------------


    public function save()
    {
        //validasi input

        $this->lokasiModel->save([
            'daerah' => $this->request->getVar('daerah'),
            'kota' => $this->request->getVar('kota'),
            'latitude' => $this->request->getVar('latitude'),
            'longitude' => $this->request->getVar('longitude'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/daerahView');
        //--------------------------------------------------------------------

    }
}
