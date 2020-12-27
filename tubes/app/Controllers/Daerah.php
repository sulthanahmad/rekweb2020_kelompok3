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

        $kunci = $this->request->getVar('cari');
        if ($kunci) {
            $query = $this->lokasiModel->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan " . $query->affectedRows() . " Data";
        } else {
            $query = $this->lokasiModel;
            $jumlah = "";
        }

        $data = [
            'title' => 'dwaawd',
            'lokasi' => $this->lokasiModel->getLokasi()
        ];
        $data['daerah'] = $query->paginate(10);
        $data['pager'] = $this->lokasiModel->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;




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
