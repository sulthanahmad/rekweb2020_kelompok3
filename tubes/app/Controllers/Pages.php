<?php

namespace App\Controllers;

use App\Models\LokasiModel;

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
            'title' => 'Makanan di daerah',
            'resto' => $this->lokasiModel->getLokasi($id),



        ];

        return view('pages/index', $data);
    }
}
