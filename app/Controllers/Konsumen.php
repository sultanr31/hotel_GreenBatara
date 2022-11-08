<?php

namespace App\Controllers;
use App\Models\KonsumenModel;
use App\Models\databaseModel;

class Konsumen extends BaseController
{
    function __construct(){
        parent::__construct();
        $this->database = new databaseModel();
        $this->konsumen = new KonsumenModel();
    }
    public function login()
    {
        if (!$this->session->logged_in) {
            return view('customer/index');
        }
        return view('customer/dashboard');
    }
    public function auth()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass_konsumen');
        $data = $this->konsumen->where('email', $email)->first();

        if($data){
            $pass = $data['pass_konsumen'];
            // $verify_pass = password_verify($password, $pass);
            if($pass == $password){
                $ses_data = [
                    'ses_email'     => $data['email'],
                    'logged_in'     => true,
                ];
                $this->session->set($ses_data);
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
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass_konsumen');
        $data = $this->konsumen->where('email', $email)->first();
        
        if(!$data){
            $arr_data = [
                'email' => $email,
                'pass_konsumen' => $password,
            ];
            $this->konsumen->insert($arr_data);
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
    public function profil($id)
    {
        $data['profile'] = $this->konsumen->where('email', $id)->first();
        return view('customer/profil.php', $data);
    }
    public function reservasi()
    {
        $data['customer'] = $this->database->where('email', $this->session->ses_email)->findAll();
        return view('customer/reservasi.php', $data);
    }
    public function feedback()
    {
        return view('customer/feedback.php');
    }
    public function editprofil($id)
    {
        $data['profile'] = $this->konsumen->where('email', $id)->first();
        return view('customer/editprofil.php', $data);
    }
    public function konsultasi($id)
    {
        return view('customer/konsultasi.php');
    }
    public function saveprofil()
    {
        $email = $this->request->getPost('email');

        $arr_data = [
            'username' => $this->request->getPost('username'),
            'pass_konsumen' => $this->request->getPost('password'),
            'jk' => $this->request->getPost('gender'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        
        $this->konsumen->update($email, $arr_data);
        $data['profile'] = $this->konsumen->where('email', $this->session->ses_email)->first();
        return view('customer/profil.php', $data);
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