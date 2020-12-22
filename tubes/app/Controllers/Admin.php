<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{

    protected $db, $builder;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
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
            'users' => $this->adminModel->getAdmin()
        ];

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }
    //--------------------------------------------------------------------



    public function delete($id)
    {
        // cari gambar berdasarkan id
        $data = $this->AdminModel->find($id);


        // cek jika file gambarnya default.png
        if ($data['user_image'] != 'default.svg') {
            // hapus gambar
            unlink('img/' . $data['user_image']);
        }


        $this->AdminModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin');
    }





    public function editProfile()
    {
        $data = [

            'title' => 'Edit Profile',
            'user' => $this->adminModel->getAdmin()
        ];

        return view('admin/editProfile', $data);
    }



    public function update($id)
    {
        // cek judul
        $komikLama  = $this->adminModel->getAdmin($this->request->getVar('id'));
        if ($komikLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah terdaftar'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput();
        }



        $fileSampul = $this->request->getFile('sampul');
        //cek gambar apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate  nama file random
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('img', $namaSampul);
            //hapus file lama
            unlink('img/' . $this->request->getVar('sampulLama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/komik');
    }
}
