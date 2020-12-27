<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'username', 'fullname', 'user_image', 'name'];

    // public function getAdmin()
    // {
    //     return $this->where(['id' => user_id()])->first();
    // }

    public function getAdmin($id = 0)
    {

        return $this->where(['id' => user_id()])->first();
    }
    //--------------------------------------------------------------------


    public function getUser()
    {

        return $this->distinct()
            ->from('auth_groups')
            ->join('auth_groups_users', 'auth_groups.id = auth_groups_users.group_id')
            ->where('users.id = auth_groups_users.user_id')
            ->findAll();
    }


    public function getProfile()
    {




        return $this->where(['id' => user_id()])->first();
    }
}
