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
            'title' => 'Temukan Restoran | Le Pesto',
            'resto' => $this->lokasiModel->getLokasi()

        ];

        return view('main/main', $data);
    }
    //--------------------------------------------------------------------

    public function mainRes()
    {
        $data = [
            'title' => 'Makanan Di daerah | Le Pesto',
            'res_id' => $this->request->getVar('res_id')
        ];

        return view('main/mainRes', $data);
    }
    //--------------------------------------------------------------------


    public function galleryRes()
    {
        $data = [
            'res_id' => $this->request->getVar('res_id')
        ];

        return view('main/galleryRes', $data);
    }
    //--------------------------------------------------------------------
}
