<?php

namespace App\Models;
use CodeIgniter\Model;

class KonsumenModel extends Model
{
    protected $table            = 'konsumen_akun';
    protected $primaryKey       = 'email';
    protected $allowedFields    = ['email', 'username', 'pass_konsumen', 'jk', 'deskripsi'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $updatedField  = 'updated_at';
}