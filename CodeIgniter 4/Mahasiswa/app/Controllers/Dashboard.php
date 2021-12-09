<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends BaseController{
    public function index(){
        $data['title']="Home";
        return view('pages/index');
    }
}