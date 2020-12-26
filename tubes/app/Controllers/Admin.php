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
        // cek judul

        if (!$this->validate([

            'user_image' => [
                'rules' => 'max_size[user_image,1024]|is_image[user_image]|mime_in[user_image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/admin/editProfile/' . $this->request->getVar('id'))->withInput();
        }



        $fileuser_image = $this->request->getFile('user_image');
        //cek gambar apakah tetap gambar lama
        if ($fileuser_image->getError() == 4) {
            $namauser_image = $this->request->getVar('user_imageLama');
        } else {
            //generate  nama file random
            $namauser_image = $fileuser_image->getRandomName();
            $fileuser_image->move('img', $namauser_image);
            //hapus file lama
            unlink('img/' . $this->request->getVar('user_imageLama'));
        }


        $this->adminModel->where('id', $id)
            ->set([
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('kota'),
                'fullname' => $this->request->getVar('fullname'),
                'user_image' => $this->request->getVar('user_image')

            ])
            ->update();
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin/daerahView');
    }
}
