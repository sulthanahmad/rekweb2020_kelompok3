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
            'title' => 'Edit Profile',
            'resto' => $this->lokasiModel->getLokasi($id)


        ];

        return view('detail_resto/index', $data);
    }
    //--------------------------------------------------------------------
}
