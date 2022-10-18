<?php

namespace App\Models;
use CodeIgniter\Model;

class KonsumenModel extends Model
{
    protected $table            = 'konsumen_akun';
    protected $primaryKey       = 'email';
    protected $allowedFields    = ['email', 'pass_konsumen'];
}