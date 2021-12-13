<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends BaseController{
    public function index(){
        $data['title']="Login";
        return view('auth/login', $data);
    }

// Method Login
    public function login(){
        // load session
        $session = session();
        $model = new UserModel();

        // ambil data dari imputan
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // ambil data dari database
        $data = $model->where('email', $email)->first();

        // cek jika ada datanya
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'        => $data['id'],
                    'username'  => $data['username'],
                    'email'     => $data['email'],
                    'is_login'  => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('user');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

// Method Register
    public function register(){
        // load session
        session();
        $data = [
            'title' => "Register",
            'validation' => \Config\Services::validation(),
        ];
        return view('auth/register', $data);
    }

// Method Simpan data dari register user
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

    // method logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}