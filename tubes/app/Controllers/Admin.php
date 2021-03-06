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
        $kunci = $this->request->getVar('cari');
        if ($kunci) {
            $query = $this->adminModel->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan " . $query->affectedRows() . " Data";
        } else {
            $query = $this->adminModel;
            $jumlah = "";
        }

        $data = [
            'title' => 'Home Admin | Le Pesto',
            'users' => $this->adminModel->getUser()
        ];
        $data['username'] = $query->paginate(10);
        $data['pager'] = $this->adminModel->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;



        return view('admin/index', $data);
    }
    //--------------------------------------------------------------------


    public function detail($id = 0)
    {
        $data = [

            'title' => 'Detail Profile | Le Pesto',
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

            'title' => 'Edit Profile | Le Pesto',
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

            'title' => 'Daftar Daerah | Le Pesto',
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

    public function deleteUser($id)
    {
        // cari gambar berdasarkan id
        $users = $this->adminModel->find($id);


        $this->adminModel->where('id',  $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/index');
    }

    public function daerahEdit($id)
    {
        $data = [
            'title' => 'Ubah Daerah | Le Pesto',
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
