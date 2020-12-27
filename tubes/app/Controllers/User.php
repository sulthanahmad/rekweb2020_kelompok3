<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db  = \Config\Database::connect();
        $this->builder = $this->db->table('lokasi');
    }


    public function index()
    {




        $data['title'] = 'Home | Lepesto';

        $this->builder->select('id, daerah, kota');
        $this->query = $this->builder->get();

        $data['lokasi'] = $this->query->getResult();









        return view('user/index', $data);
    }
    //--------------------------------------------------------------------


    public function profile()
    {
        $data['title'] = 'Profile';

        return view('user/profile', $data);
    }
    //--------------------------------------------------------------------
}
