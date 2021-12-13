<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends BaseController{
    public function index(){
        $data['title']="Login";
        return view('auth/login', $data);
    }

    public function register(){
        // load session
        session();
        $data = [
            'title' => "Register",
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/register', $data);
    }

    public function register_user(){
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'       => 'required|min_length[3]|max_length[64]',
            'email'          => 'required|min_length[6]|max_length[128]|valid_email|is_unique[user.email]',
            'password'       => 'required|min_length[3]|max_length[16]',
            'conf_password'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                // Mahasiswa
                'role_id'  => 4,
                'username' => htmlspecialchars($this->request->getVar('username')),
                'email'    => htmlspecialchars($this->request->getVar('email')),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $save = $model->save($data);
            if($save){
                session()->setFlashdata('msg', 'Your account has been created. You can able to login now');
                return redirect()->to('/login');
            }
        }else{
            $validation = \Config\Services::validation();
            return redirect()->to('register')->withInput()->with('validation', $validation);
        }
    }
}