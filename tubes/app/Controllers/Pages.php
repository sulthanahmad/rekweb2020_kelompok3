<?php

namespace App\Controllers;

use App\Models\LokasiModel;
use App\Models\AdminModel;


class Pages extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function index($id)
    {

        $data = [
            'title' => 'Makanan di daerah | Le Peso',
            'resto' => $this->lokasiModel->getLokasi($id),

        ];

        return view('pages/index', $data);
    }
    //--------------------------------------------------------------------


    public function detailRes($id)
    {
        $data = [
            'title' => 'Detail Restoran | Le Pesto',
            'resto' => $this->lokasiModel->getLokasi($id),
            'res_id' => $this->request->getVar('res_id')
        ];

        return view('pages/detailRes', $data);
    }
    //--------------------------------------------------------------------
}
