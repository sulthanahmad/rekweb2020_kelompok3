<?php

namespace App\Controllers;

use App\Models\LokasiModel;



class Main extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function main()
    {

        $data = [
            'title' => 'Makanan di daerah',
            'resto' => $this->lokasiModel->getLokasi()



        ];

        return view('main/main', $data);
    }
}
