<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['role_id','username', 'email', 'password', 'image_file'];
}