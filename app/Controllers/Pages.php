<?php

namespace App\Controllers;
use App\Models\databaseModel;

class Pages extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('admin/index.php');
    }
    public function dashboard(){
        $customerModel = new databaseModel();
        $customer = $customerModel->findAll();

        $data = [
            'customer' => $customer
        ];

        return view('admin/dashboard.php', $data);
    }
    public function loginKonsumen()
    {
        return view('customer/index.php');
    }
    public function logout()
    {
        return view('index.php');
    }
}
