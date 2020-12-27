<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\LokasiModel;

class Admin extends BaseController
{

    protected $db, $builder;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->lokasiModel = new LokasiModel();
    }

    public function index()
    {
        $data = [

            'title' => 'Edit Profile',
            'users' => $this->adminModel->getUser()
        ];

        return view('admin/index', $data);
    }
    //--------------------------------------------------------------------


    public function detail($id = 0)
    {
        $data = [

            'title' => 'Edit Profile',
            'users' => $this->adminModel->getProfile($id)
        ];

        // var_dump($id);
        // var_dump($data['users']);
        // die;

        if (empty($data['users'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }
    //--------------------------------------------------------------------


    public function editProfile()
    {
        $data = [

            'title' => 'Edit Profile',
            'user' => $this->adminModel->getAdmin()
        ];

        return view('admin/editProfile', $data);
    }
    //--------------------------------------------------------------------


    public function myProfile()
    {
        $data = [

            'title' => 'My Profile | Le pesto',
            'users' => $this->adminModel->getAdmin()
        ];

        return view('admin/myProfile', $data);
    }
    //--------------------------------------------------------------------

    public function profile()
    {
        $data = [

            'title' => 'My Profile | Le pesto',
            'users' => $this->adminModel->getAdmin()
        ];

        return view('user/profile', $data);
    }
    //--------------------------------------------------------------------


    public function daerahView()
    {
        $data = [

            'title' => 'Edit Profile',
            'lokasi' => $this->lokasiModel->getLokasi()
        ];


        return view('admin/daerahView', $data);
    }
    //--------------------------------------------------------------------


    public function delete($id)
    {
        // cari gambar berdasarkan id
        $lokasi = $this->lokasiModel->find($id);


        $this->lokasiModel->where('id',  $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/daerahView');
    }
    //--------------------------------------------------------------------


    public function daerahEdit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Lokasi',
            'validation' => \Config\Services::validation(),
            'lokasi' => $this->lokasiModel->getLokasi($id)
        ];



        return view('admin/daerahEdit', $data);
    }
    //--------------------------------------------------------------------


    public function update($id)
    {

        $this->lokasiModel->where('id', $id)
            ->set([
                'daerah' => $this->request->getVar('daerah'),
                'kota' => $this->request->getVar('kota'),
                'latitude' => $this->request->getVar('latitude'),
                'longitude' => $this->request->getVar('longitude')

            ])
            ->update();
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin/daerahView');
    }
    //--------------------------------------------------------------------


    public function updateProfile($id)
    {
        //ambil foto
        $foto = $this->request->getFile('user_image');
        if ($foto->getError() == 4) {
            $namafoto = $this->request->getVar('fotoLama');
        } else {
            //generate nama
            $namafoto = $foto->getRandomName();
            //pindahkan file ke img
            $foto->move('img/', $namafoto);
        }


        $this->adminModel->where('id', $id)
            ->set([
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'fullname' => $this->request->getVar('fullname'),
                'user_image' => $namafoto

            ])
            ->update();
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin/myProfile');
    }




    //--------------------------------------------------------------------
}
