<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class DetailResto extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function index($id)
    {

        $data = [
            'title' => 'Detail Restoran | Le Pesto',
            'resto' => $this->lokasiModel->getLokasi($id)


        ];

        return view('detail_resto/index', $data);
    }
    //--------------------------------------------------------------------
}
