<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Auth extends BaseController{
    public function index(){
        $data['title']="Login";
        return view('auth/login', $data);
    }

    public function register(){
        $data['title']="Register";
        return view('auth/register', $data);
    }

    public function register_user(){
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'       => 'required|min_length[3]|max_length[20]',
            'email'          => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'       => 'required|min_length[6]|max_length[200]',
            'conf_password'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => htmlspecialchars($this->request->getVar('username')),
                'user_email'    => htmlspecialchars($this->request->getVar('email')),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data = [
                'validation' => $this->validator,
                'title' => 'Register',
            ];
            echo view('auth/register', $data);
        }
    }
}