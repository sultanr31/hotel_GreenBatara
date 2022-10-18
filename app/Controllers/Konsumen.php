<?php

namespace App\Controllers;
use App\Models\KonsumenModel;

class Konsumen extends BaseController
{
    public function auth()
    {
        $konsumen = new KonsumenModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass_konsumen');
        $data = $konsumen->where('email', $email)->first();

        if($data){
            $pass = $data['pass_konsumen'];
            // $verify_pass = password_verify($password, $pass);
            if($pass == $password){
                return redirect()->to('/dashboardKonsumen');
            }else{
                return redirect()->to('/konsumenIndex');
            }
        }else{
            return redirect()->to('/konsumenIndex');
        }
    }
    public function create()
    {
        $konsumen = new KonsumenModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass_konsumen');
        $data = $konsumen->where('email', $email)->first();
        
        if(!$data){
            $arr_data = [
                'email' => $email,
                'pass_konsumen' => $password,
            ];
            $konsumen->insert($arr_data);
            return redirect()->to('/konsumenIndex');
        } else {
            return redirect()->to('/register');
        }
    }
    public function dashboard()
    {
        return view('customer/dashboard.php');
    }
    public function register()
    {
        return view('customer/register.php');
    }
}