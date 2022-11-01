<?php

namespace App\Controllers;
use App\Models\KonsumenModel;
use App\Models\databaseModel;

class Konsumen extends BaseController
{
    function __construct(){
        $this->customer = new databaseModel();
    }
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
    public function forgot_password()
    {
        return view('customer/forgot_password.php');
    }
    public function profil()
    {
        return view('customer/profil.php');
    }
    public function reservasi()
    {
        $data['customer'] = $this->customer->findAll();
        return view('customer/reservasi.php', $data);
    }
    public function feedback()
    {
        return view('customer/feedback.php');
    }
    public function editprofil()
    {
        return view('customer/editprofil.php');
    }
    public function saveprofil()
    {
        return view('customer/profil.php');
    }
    public function createreservasi()
    {
        return view('customer/create_reservasi.php');
    }
    public function savereservasi()
    {
        $dataModel = new databaseModel();

        $count = $this->request->getPost('count');
        $tipe = $this->request->getPost('tipe');

        $harga = 0;

        if($this->request->getPost('tipe')=="Studio") $harga = 400000;
        else if ($this->request->getPost('tipe')=="Studio II")  $harga = 500000;
        else if ($this->request->getPost('tipe')=="Suite") $harga = 750000;
        else $harga = 11000000;

        $hargaTotal = $harga * $count;

        $data = [
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'tipe' => $this->request->getPost('tipe'),
            'cin' => $this->request->getPost('tgl_cin'),
            'cout' => $this->request->getPost('tgl_cin')."INTERVAL $count DAY",
            'status' => '-',
            'rating' => '-',
            'layanan' => '-',
            'total_tagihan' => $hargaTotal
        ];

        $dataModel->insert($data);
        return view('customer/reservasi.php');
    }
}