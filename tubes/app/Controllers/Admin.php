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

        $data['title'] = 'User Detail';


        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();


        $data['user'] = $query->getRow();

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
}
