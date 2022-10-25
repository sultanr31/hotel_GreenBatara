<?php

namespace App\Controllers;

use App\Models\adminModel;

class Admin extends BaseController
{
    public function auth()
    {
        $adminMo = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('pass_admin');
        $data = $adminMo->where('username', $username)->first();

        if($data){
            $pass = $data['pass_admin'];
            // $verify_pass = password_verify($password, $pass);
            if($pass == $password){
                return redirect()->to('/dashboard');
            }else{
                return redirect()->to('/adminIndex');
            }
        }else{
            return redirect()->to('/adminIndex');
        }
    }
    
    public function reservasi()
    {
        return view('admin/checkin.php');
    }
}